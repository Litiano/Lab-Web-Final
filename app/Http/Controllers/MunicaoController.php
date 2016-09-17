<?php

namespace App\Http\Controllers;

use App\Models\Municao;
use Illuminate\Http\Request;

use App\Http\Requests;

class MunicaoController extends Controller
{
    public function index(){

    }

    public function criar(){
        return view('municao.criar');
    }

    public function criarPost(Request $request){
        $municao = Municao::create($request->all());
        if ($municao->id){
            return view('municao.criar', ['mensagem'=>'Munição cadastrada com sucesso!']);
        }
        return view('municao.criar', ['erro'=>'Erro ao cadastrar munição!']);

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
        $municoes = Municao::all();
        return view('municao.listar', compact('municoes'));
    }
}
