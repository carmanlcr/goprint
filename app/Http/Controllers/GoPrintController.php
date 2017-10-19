<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\detalleUsuarioRequest;
use App\Producto;
use App\Ordene;
use App\User;
use App\DatoUsuario;


use Mail;
use Auth;

class GoPrintController extends Controller{
    

    public function index(){
        if(Auth::check()){
            $cantidad_ordenes = Ordene::where('users_id',Auth::id())->first();
            $productos = Producto::where('stock','!=','0')->inRandomOrder()->paginate(9);
            return view('goprint.index',compact('productos','cantidad_ordenes'));
        }
    	$productos = Producto::where('stock','!=','0')->inRandomOrder()->paginate(9);
        return view('goprint.index',compact('productos'));
    }

    public function optimizar(){
    	return view('goprint.optimizararchivo');
    }

    public function crear(){
    	return view('goprint.creararchivo');
    }

    public function contactanos(){
    	return view('goprint.contactenos');
    }

    public function enviarcorreo(Request $request){
    	$mensaje = null;
    	$data = [
            'nombre' => $request->get('nombre'),
            'correo' => $request->get('correo'),
            'asunto' => $request->get('asunto'),
            'mensaje' => $request->get('mensaje')
        ];
        
        $fromEmail = "venta@goprint.pe";
        $fromName = "Administrador Goprint";

        Mail::send('goprint.email.contacto',['data'=>$data],function($message) use ($fromName,$fromEmail,$data){
        	$message->to($fromEmail,$fromName);
        	$message->from($fromEmail,$fromName);
        	$message->subject('Nuevo email de contacto: '.$data['asunto']);
        });

        $mensaje = 'El mensaje fue enviado exitosamente';

        return redirect()->route('index')->with('message',$mensaje);

    }

    public function confirmarcorreo(){
        return view('goprint.confirmarcorreo');
    }

    public function confirmeRegistro($email,$token){
        $usuario = User::where('email',$email)->first();
        
        $usuario->activo = 1;

        $usuario->save();

        return redirect()->route('login')->with('message','Cuenta verificada, puede ingresar');
    }

    public function showproducto($slug){
        
        $producto = Producto::where('slug',$slug)->first();
        $productos_aleatorios = Producto::where('slug','!=',$slug)->inRandomOrder()->limit(3)->get();
        return view('goprint.vistaproducto',compact('producto','productos_aleatorios'));  
    }

    public function verOrden(detalleUsuarioRequest $request){

        $detalle = DatoUsuario::where('id',Auth::user()->id)->first();
        $detalle->ciudad = $request->get('ciudad');
        $detalle->direccion = $request->get('direccion');
        $detalle->telefono = $request->get('telefono');
        $detalle->save();

        return redirect()->route('index')->with('message','Su pedido se realizo');
    }

    

}
