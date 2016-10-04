<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Militar extends Model
{
    protected $table = 'militares';

    protected $fillable = ['nome_guerra', 'posto', 'reserva_id'];

    public function cautelas(){
        return $this->hasMany(Cautela::class, 'militar_id', 'id');
    }
}
