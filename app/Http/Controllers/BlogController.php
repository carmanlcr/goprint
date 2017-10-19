<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Blog\CrearBlogRequest;
use App\Http\Requests\Blog\EditBlogRequest;
use App\Blog;
use App\User;

//Date
use Jenssegers\Date\Date;

use Auth;
use Carbon;
use Input;
class BlogController extends Controller
{
    
    
    public function __construct(){
        Date::setLocale('es');
        $this->middleware('auth',['only'=>'create','store','edit','update','destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Blog::where('activo',1)->with('users')->orderBy('id','DESC')->paginate(12);
        return view('goprint.blog.blog',compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('goprint.blog.crearblog');
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
            'imagen' => Input::file('imagen'),
            'users_id' => Auth::user()->id
        ];

        $blog = Blog::create($data);

        if($blog){
            return redirect()->route('blog.index')->with('message','El post fue creado correctamente');
        }

        return redirect()->route('blog.index')->with('messageError','Hubo un error');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $slug)
    {
        return view('goprint.blog.vistablog',compact('slug'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $slug)
    {
       
        return view('goprint.blog.edit',compact('slug'));
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
        if(Input::file('imagen') == null){
            $slug->imagen = $request->get('imagenanterior');
        }else{
            $slug->imagen = Input::file('imagen');
        }

        $guardado = $slug->save();

        if($guardado){
            return redirect()->back()->with('message','El post se edito con exito');
        }else{
            return redirect()->back()->with('message','Hubo un error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $slug)
    {
        $eliminar = $slug->delete();

        if($eliminar){
            return redirect()->route('blog.index')->with('message','Se eliminó correctamente');
        }

        return redirect()->route('blog.index')->with('message','Ocurrió un error al intentar eliminar');
        
    }
}
