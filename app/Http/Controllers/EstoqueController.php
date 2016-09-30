<?php

namespace App\Http\Controllers;

use App\Models\Acessorio;
use App\Models\Armamento;
use App\Models\Estoque;
use App\Models\Municao;
use Illuminate\Http\Request;

use App\Http\Requests;

class EstoqueController extends Controller
{
    public function gerenciar(){
        $armas = Armamento::whereReservaId(\Auth::user()->reserva_id)->get();
        $municoes = Municao::all();
        $acessorios = Acessorio::all();
        return view('estoque.gerenciar', compact(['armas', 'municoes', 'acessorios']));
    }

    public function gerenciarPost(Request $request){
        $data = $request->all();
        foreach ($data['acessorios'] as $key => $acessorio){
            $item = Estoque::firstOrNew(['reserva_id' => \Auth::user()->reserva_id, 'tipo'=> 'acessorio', 'item_id' => $key]);
            $item->quantidade = $item->quantidade + $acessorio['quantidade'];
            $item->save();
        }

        foreach ($data['municoes'] as $key => $municao){
            $item = Estoque::firstOrNew(['reserva_id' => \Auth::user()->reserva_id, 'tipo'=> 'municao', 'item_id' => $key]);
            $item->quantidade = $item->quantidade + $municao['quantidade'];
            $item->save();
        }
    }

    public function teste(){
        $estoque = Estoque::firstOrNew(['reserva_id' => 1, 'tipo'=> 'acessorio', 'item_id' => '4']);
        dd($estoque);
    }

    public function listar(){
        $armamentos = Armamento::whereReservaId(\Auth::user()->reserva_id)->get();

        $municoes = Estoque::whereReservaId(\Auth::user()->reserva_id)->whereTipo('municao')->get();
        $acessorios = Estoque::whereReservaId(\Auth::user()->reserva_id)->whereTipo('acessorio')->get();

        return view('estoque.listar', compact('armamentos', 'municoes', 'acessorios'));
    }
}
