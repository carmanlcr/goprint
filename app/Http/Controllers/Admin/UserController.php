<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UsuarioCreateRequest;
use App\Http\Requests\Admin\User\UsuarioEditRequest;

use App\User;
use App\DatoUsuario;
use App\TipoUsuario;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::with(['dato_usuarios','tipo_usuarios'])->paginate(20);
        return view('admin.user.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo = TipoUsuario::pluck('tipo','id');
        return view('admin.user.create',compact('tipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioCreateRequest $request)
    {
        $datos = [
            'nombre' => $request->get('nombre'),
            'apellido' => $request->get('apellido'),
            'ciudad' => $request->get('ciuidad'),
            'direccion' => $request->get('direccion'),
            'telefono' => $request->get('telefono')
        ];

        $dato = DatoUsuario::create($datos);

        $name = DatoUsuario::all()->last();

        $user = [
            'email' => $request->get('email'),
            'username' => $request->get('username'),
            'password' => bcrypt($request->get('password')),
            'imagen' => $request->file('imagen'),
            'dato_usuarios_id' => $name->id,
            'tipo_usuarios_id' => $request->get('tipo')
        ];

        $new_user = User::create($user);

        $mensaje = $new_user ? 'El usuario se creo perfectamente' : 'Hubo un problema al crear usuario';
        return redirect()->route('users.index')->with('message',$mensaje);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $username)
    {
         return $username;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $username)
    {
        $tipo = TipoUsuario::pluck('tipo','id');
        return view('admin.user.edit',compact('tipo','username'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsuarioEditRequest $request, User $username)
    {

        $this->validate($request,[
            'password' => ($request->get('password') != "") ? 'required|min:8|confirmed' : '',
            ]);
        $username->dato_usuarios->nombre = $request->get('nombre');
        $username->dato_usuarios->apellido = $request->get('apellido');
        $username->email = $request->get('email');
        $username->username = $request->get('username');
        if($request->file('imagen') != ""){
            $username->imagen = $request->file('imagen');
        }
        $username->tipo_usuarios_id = $request->get('tipo');
        $username->dato_usuarios->ciudad = $request->get('ciudad');
        $username->dato_usuarios->direccion = $request->get('direccion');
        $username->dato_usuarios->telefono = $request->get('telefono');

        if($request->get('password') != ""){
            $username->password = bcrypt($request->get('password'));
        }

        if($request->get('activo') == "on") $username->activo = 1;

        $actualizar = $username->save();

        $mensaje = $actualizar ? 'El usuario fue actualizado correctamente' : 'No se pudo actualizar el usuario';

        return redirect()->route('users.index')->with('message',$mensaje);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $username)
    {
        //Eliminar de manera logica
        if($username->activo === 0){
            $eliminar = 0;
            return redirect()->route('users.index')->with('message','Este usuario ya esta eliminado');
        }else{
            $username->activo = 0;
            $eliminar = $username->save();
        }

        $mensaje = $eliminar ? 'El usuario fue eliminado correctamente' : 'Hubo un error al procesar solicitud para eliminar';

        return redirect()->route('users.index')->with('message',$mensaje);
    }
}
