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

    public function criar($nome, $nomeGuerra, $posto, $reservaId, $aniversario, $genero, $endreco)
    {
        return true;
    }

    public function funcaoComplexa($teste)
    {
        switch ($teste) {
            case 1:
                return 1;
            case 2:
                return 2;
            case 3:
                return 3;
            case 4:
                return 4;
            case 6:
                return 6;
            case 7:
                return 7;
            case 8:
                return 8;
            case 9:
                return 9;
            default:
                return 0;
        }
    }

    public function Nome_Estranho() {
        return null;
    }

    public function naoIndentada() {return 2+2;}

    public function muitosIf($a, $b, $c, $d)
    {
        if($a) {
            if($b) {
                if($c){
                    if($d) {
                        return 1;
                    }
                }
            }
        }
        return 0;
    }
}
