<?php

namespace App\Http\Controllers;

use App\Models\Militar;
use Illuminate\Http\Request;

use App\Http\Requests;

class MilitarController extends Controller
{
    public function index(){

    }

    public function criar(){
        return view('militar.criar');
    }

    public function criarPost(Request $request){
        $all = $request->all();
        $militar = new Militar();
        $militar->nome_guerra = $all['nome_guerra'];
        $militar->posto = $all['posto'];
        $militar->save();
        return view('militar.criar', ['mensagem'=>'Militar Cadastrado com Sucesso!']);

    }

    public function ver(){

    }

    public function editar(){

    }

    public function editarPost(){

    }

    public function excluir($id){

    }

    public function listar(){

    }
}
