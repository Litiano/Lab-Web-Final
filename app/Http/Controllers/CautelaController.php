<?php

namespace App\Http\Controllers;

use App\Models\Armamento;
use App\Models\Militar;
use App\Models\Municao;
use Illuminate\Http\Request;

use App\Http\Requests;

class CautelaController extends Controller
{
    public function index(){

    }

    public function criar($militarId){
        $militar = Militar::find($militarId);
        $armamentos = Armamento::whereDisponivel(1)->get();
        $municoes = Municao::where('quantidade', '>', '0')->get();
        return view('cautela.criar', compact('militar', 'armamentos', 'municoes'));
    }

    public function criarPost(Request $request){
        dd($request->all());
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
