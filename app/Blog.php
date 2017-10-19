<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

use Carbon\Carbon;

class Blog extends Model
{

    use Sluggable, SluggableScopeHelpers;

	public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'titulo'
            ]
        ];
    }

    protected $fillable = [
        'titulo', 'slug', 'descripcion','descripcion_corta', 'imagen' , 'activo' ,'users_id',
    ];

    //Una orden pertenece a un solo usuario
    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function setImagenAttribute($path){
        if(!empty($path)){
            $name = Carbon::now()->second.'-'.Carbon::now()->minute.'-'.$path->getClientOriginalName();
            $this->attributes['imagen'] = $name;
            \Storage::disk('local')->put($name, \File::get($path));
        }
    }
}
