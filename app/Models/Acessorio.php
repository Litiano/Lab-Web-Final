<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Acessorio extends Model
{
    protected $table = 'acessorios';

    protected $fillable = ['descricao', 'quantidade'];

    public function getQuantidadeAttribute(){
        $estoque = Estoque::whereReservaId(\Auth::user()->reserva_id)
            ->whereTipo('acessorio')
            ->whereItemId($this->id)
            ->first();
        if($estoque){
            return $estoque->quantidade;
        }
        return false;
    }
}
