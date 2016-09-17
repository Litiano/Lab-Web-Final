<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Acessorio extends Model
{
    protected $table = 'acessorios';

    protected $fillable = ['descricao', 'quantidade'];
}
