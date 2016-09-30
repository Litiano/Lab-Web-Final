<?php

namespace App\Http\Controllers;

use App\Models\Armamento;
use App\Models\Estoque;
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
        if(\Auth::user()->reserva_id != $militar->reserva_id){
            return redirect()->back();
        }
        $armamentos = Armamento::whereReservaId(\Auth::user()->reserva_id)->whereDisponivel(1)->get();

        $estoque = Estoque::whereReservaId(\Auth::user()->reserva_id)->get();

        return view('cautela.criar', compact('militar', 'armamentos', 'estoque'));
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
