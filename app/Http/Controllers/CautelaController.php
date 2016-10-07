<?php

namespace App\Http\Controllers;

use App\Models\Armamento;
use App\Models\Cautela;
use App\Models\Estoque;
use App\Models\Militar;
use App\Models\Municao;
use App\Models\Reserva;
use Illuminate\Http\Request;

use App\Http\Requests;

class CautelaController extends Controller
{
    public function index(){

    }

    public function criar($militarId){
        $militar = Militar::find($militarId);
        if(\Auth::user()->reserva_id != $militar->reserva_id){
            return redirect()->back();
        }
        $armamentos = Armamento::whereReservaId(\Auth::user()->reserva_id)->whereDisponivel(1)->get();

        $municoes = Estoque::whereReservaId(\Auth::user()->reserva_id)->where('quantidade', '>', 0)->whereTipo('municao')->get();
        $acessorios = Estoque::whereReservaId(\Auth::user()->reserva_id)->where('quantidade', '>', 0)->whereTipo('acessorio')->get();

        return view('cautela.criar', compact('militar', 'armamentos', 'municoes', 'acessorios'));
    }

    public function criarPost(Request $request){
        $dados = $request->all();

        $cautela = new Cautela();
        $cautela->militar_id = $dados['militar_id'];
        $cautela->reserva_id = \Auth::user()->reserva_id;
        $cautela->user_id = \Auth::user()->id;
        $cautela->finalizada = false;
        $cautela->save();

        if(isset($dados['armamentos'])){
            foreach ($dados['armamentos'] as $key){
                $armamento = Armamento::find($key);
                $armamento->disponivel = false;
                $armamento->save();
                $itemCautela = new Cautela\Item();
                $itemCautela->cautela_id = $cautela->id;
                $itemCautela->item_id = $armamento->id;
                $itemCautela->descricao = $armamento->modelo;
                $itemCautela->tipo = 'armamento';
                $itemCautela->quantidade_solicitada = 1;
                $itemCautela->quantidade_devolvida = 0;
                $itemCautela->save();
            }
        }

        if(isset($dados['municoes'])){
            foreach ($dados['municoes'] as $key => $quantidade){
                if($quantidade == 0){continue;}
                $municao = Estoque::find($key);
                $municao->quantidade = $municao->quantidade - $quantidade;
                $municao->save();
                $itemCautela = new Cautela\Item();
                $itemCautela->cautela_id = $cautela->id;
                $itemCautela->item_id = $municao->id;
                $itemCautela->descricao = $municao->item->descricao;
                $itemCautela->tipo = 'municao';
                $itemCautela->quantidade_solicitada = $quantidade;
                $itemCautela->quantidade_devolvida = 0;
                $itemCautela->save();
            }
        }

        if(isset($dados['acessorios'])){
            foreach ($dados['acessorios'] as $key => $quantidade){
                if($quantidade == 0){continue;}
                $acessorio = Estoque::find($key);
                $acessorio->quantidade = $acessorio->quantidade - $quantidade;
                $acessorio->save();
                $itemCautela = new Cautela\Item();
                $itemCautela->cautela_id = $cautela->id;
                $itemCautela->item_id = $acessorio->id;
                $itemCautela->descricao = $acessorio->item->descricao;
                $itemCautela->tipo = 'acessorio';
                $itemCautela->quantidade_solicitada = $quantidade;
                $itemCautela->quantidade_devolvida = 0;
                $itemCautela->save();
            }
        }

        if($cautela->itens->count() == 0){
            $cautela->delete();
            return redirect()->back()
                ->with('erro', 'Selecione algum item!');
        }

        return redirect('/sistema/cautela/ver/'.$cautela->id)
            ->with('mensagem', 'Cautela Cadastrada com Sucesso!');
    }

    public function ver($id){
        $cautela = Cautela::find($id);
        $armamentos = $cautela->armamentos;
        $municoes = $cautela->municoes;
        $acessorios = $cautela->acessorios;
        return view('cautela.ver', compact(['cautela']));
    }

    public function editar(){

    }

    public function editarPost(){

    }

    public function excluir($id){

    }

    public function listar($id = null){
        if(isset($id)){
            $cautelas = Cautela::whereReservaId(\Auth::user()->reserva_id)
                ->whereMilitarId($id)->get();
        }else{
            $cautelas = Cautela::whereReservaId(\Auth::user()->reserva_id)->get();
        }

        return view('cautela.listar', compact('cautelas'));
    }

    public function devolverItem($id, Request $request){
        $all = $request->all();

        $item = Cautela\Item::find($id);
        $item->quantidade_devolvida = $item->quantidade_devolvida + $all['quantidade'];
        $item->save();

        switch ($all['tipo']){
            case 'armamento':
                $armamento = Armamento::find($item->item_id);
                $armamento->disponivel = 1;
                $armamento->save();
                break;
            default :
                $estoque = Estoque::find($item->item_id);
                $estoque->quantidade = $estoque->quantidade + $all['quantidade'];
                $estoque->save();
                break;
        }

        return redirect()->back()->with('mensagem', 'Item devolvido com sucesso"');
    }

    public function devolverTudo($id){
        $itens = Cautela\Item::whereCautelaId($id)->get();
        foreach ($itens as $item){
            if($item->tipo == "armamento"){
                $armamento = Armamento::find($item->item_id);
                $armamento->disponivel = 1;
                $armamento->save();
            }else{
                $estoque = Estoque::find($item->item_id);
                $estoque->quantidade = $estoque->quantidade + $item->quantidade;
                $estoque->save();
            }
            $item->quantidade_devolvida = $item->quantidade_solicitada;
            $item->save();
        }
        $cautela = Cautela::find($id);
        $cautela->finalizada = true;
        $cautela->save();
        return redirect()->back()->with('mensagem', 'Cautela devolvida com sucesso"');
    }
}