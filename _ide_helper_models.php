<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Acessorio
 *
 * @property integer $id
 * @property string $descricao
 * @property integer $quantidade
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Acessorio whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Acessorio whereDescricao($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Acessorio whereQuantidade($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Acessorio whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Acessorio whereUpdatedAt($value)
 */
	class Acessorio extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Armamento
 *
 * @property integer $id
 * @property string $numero_serie
 * @property string $modelo
 * @property string $fabricante
 * @property boolean $disponivel
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Armamento whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Armamento whereNumeroSerie($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Armamento whereModelo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Armamento whereFabricante($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Armamento whereDisponivel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Armamento whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Armamento whereUpdatedAt($value)
 */
	class Armamento extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Cautela
 *
 * @property integer $id
 * @property integer $militar_id
 * @property boolean $finalizada
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Cautela whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Cautela whereMilitarId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Cautela whereFinalizada($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Cautela whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Cautela whereUpdatedAt($value)
 */
	class Cautela extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Militar
 *
 * @property integer $id
 * @property string $posto
 * @property string $nome_guerra
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Militar whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Militar wherePosto($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Militar whereNomeGuerra($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Militar whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Militar whereUpdatedAt($value)
 */
	class Militar extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Municao
 *
 */
	class Municao extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property integer $id
 * @property string $nome
 * @property string $sobrenome
 * @property string $email
 * @property string $login
 * @property string $senha
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $unreadNotifications
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereNome($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereSobrenome($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereLogin($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereSenha($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

