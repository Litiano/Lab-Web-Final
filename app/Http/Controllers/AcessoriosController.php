<?php

namespace App\Http\Controllers;

use App\Models\Acessorio;
use Illuminate\Http\Request;


class AcessoriosController extends Controller
{
    public function index(){

    }

    public function criar(){
        return view('acessorio.criar');
    }

    public function criarPost(Request $request){
        $acessorio = Acessorio::create($request->all());
        if ($acessorio->id){
            return view('acessorio.criar', ['mensagem'=>'Acessório cadastrado com sucesso!']);
        }
        return view('acessorio.criar', ['erro'=>'Erro ao cadastrar acessório!']);

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
        $acessorios = Acessorio::all();
        return view('acessorio.listar', compact('acessorios'));
    }
}
