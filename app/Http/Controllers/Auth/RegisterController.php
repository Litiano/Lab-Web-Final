<?php

namespace App\Http\Controllers\Auth;

use App\Models\Reserva;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/register';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:usuarios',
            'login' => 'required|unique:usuarios',
            'password' => 'required|min:6|confirmed',
            'senha_admin' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'nome' => $data['name'],
            'sobrenome' => $data['sobrenome'],
            'email' => $data['email'],
            'login' => $data['login'],
            'senha' => bcrypt($data['password']),
            'reserva_id' => $data['reserva_id']
        ]);
    }

    public function showRegistrationForm(){
        $reservas = Reserva::all();
        return view('auth.register', compact('reservas'));
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $data = $request->all();
        $reservas = Reserva::all();
        // Senha do admin é 123456
        if(!Hash::check($data['senha_admin'], '$2y$10$vSUjCpn9kkj3ghbNUCUKm.hra62PGsJ14uMvU14o4K.MJ/c95o2C2')){
            return view('auth.register', ['erro' => 'Senha Admin Inválida', 'reservas'=>$reservas]);
        }
        $this->create($request->all());

        return view('auth.register', ['mensagem' => 'Usuário cadastrado com sucesso!', 'reservas'=>$reservas]);

    }
}
