<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\CrearBlogRequest;
use App\Http\Requests\Blog\EditBlogRequest;

//Date
use Jenssegers\Date\Date;

use App\Blog;
use App\User;


class BlogController extends Controller
{

    public function __construct(){
        Date::setLocale('es');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Blog::with('users.dato_usuarios')->paginate(12);
        return view('admin.blog.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::pluck('username','id');
        return view('admin.blog.create',compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearBlogRequest $request)
    {
        $data = [
            'titulo' => $request->get('titulo'),
            'descripcion' => $request->get('descripcion'),
            'descripcion_corta' => str_limit($request->get('descripcion'),150),
            'imagen' => $request->file('imagen'),
            'users_id' => $request->get('username')
        ];


        $blog = Blog::create($data);

        $mensaje = $blog ? 'El post se creo correctamente' : 'Hubo un error';

        return redirect()->route('blogs.index')->with('message',$mensaje);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $slug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $slug)
    {
         $usuarios = User::pluck('username','id');
        return view('admin.blog.edit',compact('slug','usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditBlogRequest $request, Blog $slug)
    {
        $slug->fill($request->all());
        if($request->file('imagen') == null){
            $slug->imagen = $request->get('imagenanterior');
        }else{
            $slug->imagen = $request->file('imagen');
        }

        if($request->get('activo') != "on"){
            $slug->activo = 0; 
        }else{
            $slug->activo = 1;
        }

        $guardado = $slug->save();

        $mensaje = $guardado ? 'El post se edito correctamente' : 'Hubo un erro al procesar solicitud';

        return redirect()->route('blogs.index')->with('message',$mensaje);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $slug)
    {
        $slug->activo = 0;
        $eliminar = $slug->save();


        $mensaje = $eliminar ? 'Se eleminó correctamente' : 'Ocurrió un error al intentar eliminar';

        return redirect()->route('blogs.index')->with('message',$mensaje);
    }
}
