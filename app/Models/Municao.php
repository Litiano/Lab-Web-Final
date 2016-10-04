<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municao extends Model
{
    protected $table = 'municoes';

    protected $fillable = ['calibre', 'descricao'];

    public function getQuantidadeAttribute(){
        $estoque = Estoque::whereReservaId(\Auth::user()->reserva_id)
            ->whereTipo('municao')
            ->whereItemId($this->id)
            ->first();
        if($estoque){
            return $estoque->quantidade;
        }
        return false;
    }
}
