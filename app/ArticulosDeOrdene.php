<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;;
class ArticulosDeOrdene extends Model
{
    protected $fillable = [
        'precio', 'cantidad','imagen', 'ordenes_id', 'productos_id',
    ];

    //Como no utilizo el timestamps
    public $timestamps = false;

    //Un articulo solo pertenece a una orden
    public function ordenes()
    {
        return $this->belongsTo('App\Ordene');
    }

    //Un articulo es parte de un producto
     public function productos()
    {
        return $this->belongsTo('App\Producto');
    }

    public function setImagenAttribute($path){
        if(!empty($path)){
            $name = Carbon::now()->second.'-'.Carbon::now()->minute.'-'.$path->getClientOriginalName();
            $this->attributes['imagen'] = $name;
            \Storage::disk('local')->put($name, \File::get($path));
        }
    }
}