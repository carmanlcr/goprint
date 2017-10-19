<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\DatoUsuario;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Mail;

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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/confirmarRegistro';

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
            'nombre' => 'required|min:2|max:30',
            'apellido' => 'required|min:2|max:30',
            'email' => 'required|email|max:255|unique:users',
            'username' => 'required|min:6|max:30|unique:users',
            'password' => 'required|min:8|confirmed',
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


        DatoUsuario::create([
               'nombre' => $data['nombre'],
               'apellido' => $data['apellido'],
            ]);
        $nombre = $data['nombre'];

        $dato = DatoUsuario::all()->last();

        $user = New User([
                'email' => $data['email'],
                'username' => $data['username'],
                'password' => bcrypt($data['password']),
                'dato_usuarios_id' => $dato->id,
        ]);

        $user->remember_token = str_random(60);
        $user->save();

        Mail::send('goprint.email.validarregistro',['user'=>$user,'nombre' => $nombre],function($m) use ($user,$nombre){ 
            $m->subject('Activa tu cuenta');
            $m->to($user->email,$nombre);
        });

        return $user;
    }
}
