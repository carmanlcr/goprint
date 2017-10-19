<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatoUsuario extends Model
{
	protected $fillable = [
        'nombre','apellido','ciudad','direccion','telefono', 
    ];

    public $timestamps = false;

    //Un dato pertenece a un usuario
    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function setNombreAttribute($valor){ //Para guardar el nombre con la primera letra en mayuscula
        $this->attributes['nombre'] = ucfirst($valor);
    }

    public function setApellidoAttribute($valor){ //Para guardar el apellido con la primera letra en mayuscula
        $this->attributes['apellido'] = ucfirst($valor);
    }

}
