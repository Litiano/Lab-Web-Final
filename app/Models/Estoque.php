<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $table = 'estoque';

    protected $fillable = ['reserva_id', 'item_id', 'tipo', 'quantidade'];

    public function getItemAttribute(){
        switch ($this->tipo){
            case 'municao':
                $item =  Municao::find($this->item_id);
                break;
            case 'acessorio':
                $item = Acessorio::find($this->item_id);
                break;
            default :
                $item = null;
                break;
        }

        return $item;
    }

    public function getMunicoes(){
        return Estoque::whereReservaId(\Auth::user()->reserva_id)->whereTipo('municao')->get();
    }

    public function getAcessorios(){
        return Estoque::whereReservaId(\Auth::user()->reserva_id)->whereTipo('acessorio')->get();
    }

}
