<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municao extends Model
{
    protected $table = 'municoes';

    protected $fillable = ['calibre', 'descricao', 'quantidade'];
}
