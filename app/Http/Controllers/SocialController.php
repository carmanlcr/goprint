<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\DatoUsuario;

use Auth;
use Socialite;
use Hash;

class SocialController extends Controller
{
    public function getSocialAuth($provider){
    	if(!config("services.$provider")){
    		abort('404');
    	}

    	return Socialite::driver($provider)->redirect();
    }

    public function getSocialAuthCallBack($provider){
    	if($user = Socialite::driver($provider)->user()){
   			if($the_user = User::where('email',$user->email)->first()){
   				if($the_user->imagen != $user->avatar){
   					$otro = new User;
   					$otro->imagen = $user->avatar;
   					$otro->save();
   				}
   				Auth::login($the_user);
   			}else{
   				$nombres = explode(" ", $user->name);
   				$nombre = $nombres[0];
   				$apellido = $nombres[1];

   				$dato_usuario = New DatoUsuario;

   				$dato_usuario->nombre = $nombre;
   				$dato_usuario->apellido = $apellido;
   				$dato_usuario->save();

   				$dato_usuario_id = DatoUsuario::all()->last();
   				

   				$nuevo_usuario = new User;

   				$nuevo_usuario->email = $user->email;
          $nuevo_usuario->username = $apellido.$nombre.$user->id;
   				$nuevo_usuario->password = Hash::make('0204050604030405');
   				$nuevo_usuario->imagen = $user->avatar;
   				$nuevo_usuario->activo = 1;
   				$nuevo_usuario->social = 1;
   				$nuevo_usuario->dato_usuarios_id = $dato_usuario_id->id;

   				$nuevo_usuario->save();

   				Auth::login($nuevo_usuario);

   			}
   			return redirect()->route('index');
    	}else{
    		return "Algo fue mal";
    	}
    }
}
