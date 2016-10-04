<?php

namespace App;

use App\Models\Reserva;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'usuarios';

    protected $fillable = [
        'nome', 'email', 'senha', 'sobrenome', 'login', 'reserva_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->senha;
    }

    public function reserva(){
        return $this->belongsTo(Reserva::class, 'reserva_id', 'id');
    }
}
