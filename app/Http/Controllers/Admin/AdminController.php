<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//Date
use Jenssegers\Date\Date;


use App\User;
use App\Ordene;
use Carbon\Carbon;

class AdminController extends Controller
{

	public function __construct(){
        Date::setLocale('es');
    }


    public function index(){
        $ahora = Carbon::now()->subWeek();
        if($ahora->month < 10){
            if($ahora->day < 10){
                $nuevo = $ahora->year.'-0'.$ahora->month.'-0'.$ahora->day;
            }else{
                $nuevo = $ahora->year.'-0'.$ahora->month.'-'.$ahora->day;
            }
        }else{
            if($ahora->day < 10){
                $nuevo = $ahora->year.'-'.$ahora->month.'-0'.$ahora->day;
            }else{
                $nuevo =$ahora->year.'-'.$ahora->month.'-'.$ahora->day;
            }
        }
        $ultimos_usuarios = User::where('created_at','>', $ahora)->with('dato_usuarios')->limit(6)->get();
    	$usuarios_registrados = User::where('social',0)->count('id');
    	$usuarios_registrados_con_fb = User::count('id') - $usuarios_registrados;
    	$ordenes_totales = Ordene::count('id');
    	return view('admin.inicio',compact('usuarios_registrados','usuarios_registrados_con_fb','ordenes_totales','ultimos_usuarios'));
    }

    public function error(){
    	return view('vendor.notifications.404');
    }
}
