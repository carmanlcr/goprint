<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

use Carbon\Carbon;

class Producto extends Model
{
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'nombre'
            ]
        ];
    }

    
    protected $fillable = [
        'nombre', 'slug', 'descripcion','precio','stock','imagen','size','activo',
    ];

    //Un producto es parte del articulo
    public function articulos_de_ordenes()
    {
        return $this->hasOne('App\ArticulosDeOrdene');
    }

    public function setImagenAttribute($path){
        if(!empty($path)){
            $name = Carbon::now()->second.'-'.Carbon::now()->minute.'-'.$path->getClientOriginalName();
            $this->attributes['imagen'] = $name;
            \Storage::disk('local')->put($name, \File::get($path));
        }
    }
}