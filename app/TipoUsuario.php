<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $fillable = [
        'tipo', 
    ];

    public $timestamps = false;

    //Un tipo pertenece a un usuario
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
