<?php

namespace App\Models;

use App\Models\Cautela\Item;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Cautela extends Model
{
    protected $table = 'cautelas';

    public function itens(){
        return $this->hasMany(Item::class, 'cautela_id', 'id');
    }

    public function militar(){
        return $this->belongsTo(Militar::class, 'militar_id', 'id');
    }

    public function getArmamentosAttribute(){
        return $this->itens->filter(function ($value, $key){
            if($value->tipo == 'armamento'){
                return true;
            }
            return false;
        });
    }

    public function getMunicoesAttribute(){
        return $this->itens->filter(function ($value, $key){
            if($value->tipo == 'municao'){
                return true;
            }
            return false;
        });
    }

    public function getAcessoriosAttribute(){
        return $this->itens->filter(function ($value, $key){
            if($value->tipo == 'acessorio'){
                return true;
            }
            return false;
        });
    }


}
