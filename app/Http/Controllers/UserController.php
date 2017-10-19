<?php

namespace App\Http\Controllers;
use App\Http\Requests\ActualizarDatosRequest;
use App\Http\Requests\ActualizarImagenRequest;
use Illuminate\Http\Request;
use App\User;
use App\DatoUsuario;


use Auth;
use Image;
use Carbon\Carbon;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $username)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $username)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarDatosRequest $request,User $username)
    {
        if(Auth::check()){
            $usuario = DatoUsuario::where('id',Auth::id())->first();
            
            $usuario->nombre = $request->get('nombre');
            $usuario->apellido = $request->get('apellido');
            $usuario->ciudad = $request->get('ciudad');
            $usuario->direccion = $request->get('direccion');
            $usuario->telefono = $request->get('telefono');

            $usuario->save();

            return redirect()->back()->with('message','Datos actualizados');
        }

        return "No tiene permiso para esta acción";
    }

    public function avatar(ActualizarImagenRequest $request){
        $user = Auth::user();

        $user->imagen = $request->file('imagen');

        $name = Carbon::now()->second.'-'.Carbon::now()->minute.'-'.$request->file('imagen')->getClientOriginalName();
        Image::make($request->file('imagen'))->save('img/user/'.$name);

        $user->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $username)
    {
        //
    }

    public function profile($username){
        $usuario = User::where('username',$username)->with('dato_usuarios')->first();
        if($usuario){
            return view('goprint.profile',compact('usuario'));
        }

        return "Error 404";
        
    }
}
