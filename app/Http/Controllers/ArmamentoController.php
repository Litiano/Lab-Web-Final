<?php

namespace App\Http\Controllers;

use App\Models\Armamento;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Validation\Validator;

class ArmamentoController extends Controller
{
    public function index(){

    }

    public function criar(){
        return view('armamento.criar');
    }

    public function criarPost(Request $request){
        $all = $request->all();

        $this->validate($request, [
            'numero_serie' => 'required|unique:armamentos|max:255',
        ]);

        $armamento = new Armamento();
        $armamento->numero_serie = $all['numero_serie'];
        $armamento->modelo = $all['modelo'];
        $armamento->fabricante = $all['fabricante'];
        $armamento->disponivel = 1;
        $armamento->reserva_id = \Auth::user()->reserva_id;
        $armamento->save();

        if($armamento->id){
            return view('armamento.criar', ['mensagem'=>"Armamento cadastrado com sucesso!"]);
        }else{
            return view('armamento.criar', ['erro'=>"Erro ao cadastrar armamento!"]);
        }
    }

    public function ver(){

    }

    public function editar(){

    }

    public function editarPost(){

    }

    public function excluir($id){
        Armamento::destroy($id);
        return view('armamento.listar', ['mensagem'=>'Excluido com sucesso!']);
    }

    public function listar(){
        $armamentos = Armamento::all();
        return view('armamento.listar', compact('armamentos'));
    }
}
