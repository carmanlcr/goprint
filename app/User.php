<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Carbon\Carbon;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email','username', 'imagen', 'password','activo','social', 'dato_usuarios_id', 'tipo_usuarios_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Un usuario tiene muchas ordenes
    public function ordenes()
    {
        return $this->hasMany('App\Ordene');
    }

    //Un usuario tiene unos datos
    public function dato_usuarios()
    {
        return $this->belongsTo('App\DatoUsuario');
    }

    //Un usuario tiene un solo tipo
    public function tipo_usuarios()
    {
        return $this->belongsTo('App\TipoUsuario');
    }

    //Un usuario tiene muchas publicaciones
    public function blogs(){
        return $this->hasMany('App\Blog');
    }

    public function setImagenAttribute($path){
        if(!empty($path)){
            $name = Carbon::now()->second.'-'.Carbon::now()->minute.'-'.$path->getClientOriginalName();
            $this->attributes['imagen'] = $name;
            \Storage::disk('local')->put($name, \File::get($path));
        }
    }
}
