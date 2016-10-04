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
        $postos = ['General', 'Coronel', 'Tenente-Coronel', 'Major', 'Capitão', '1º Tenente', '2º Tenente',
            'Aspirante a Oficial', 'Subtenente', '1º Sargento', '2º Sargento', '3º Sargento', 'Cabo', 'Soldado'];
        return view('militar.criar', compact('postos'));
    }

    public function criarPost(Request $request){
        $postos = ['General', 'Coronel', 'Tenente-Coronel', 'Major', 'Capitão', '1º Tenente', '2º Tenente',
            'Aspirante a Oficial', 'Subtenente', '1º Sargento', '2º Sargento', '3º Sargento', 'Cabo', 'Soldado'];
        $all = $request->all();
        $militar = new Militar();
        $militar->nome_guerra = $all['posto'] . ' ' . $all['nome'];
        $militar->posto = $all['posto'];
        $militar->reserva_id = \Auth::user()->reserva_id;
        $militar->save();
        return view('militar.criar', ['mensagem'=>'Militar Cadastrado com Sucesso!', 'postos'=>$postos]);

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
        $militares = Militar::whereReservaId(\Auth::user()->reserva_id)->get();
        return view('militar.listar', compact('militares'));
    }
}
