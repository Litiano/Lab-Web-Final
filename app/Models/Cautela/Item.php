<?php

namespace App\Models\Cautela;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'cautelas_itens';

    public function getQuantidadeAttribute(){
        return $this->quantidade_solicitada - $this->quantidade_devolvida;
    }
}
