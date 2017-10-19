<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Producto\ProductoCreateRequest;
use App\Http\Requests\Admin\Producto\ProductoEditRequest;

use App\Task;
use App\Policies\TaskPolicy;

use App\Producto;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::paginate(20);
        return view('admin.productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoCreateRequest $request){
        $data = [
            'nombre' => $request->get('nombre'),
            'descripcion' => $request->get('descripcion'),
            'precio' =>  $request->get('precio'),
            'imagen' =>  $request->file('imagen'), 
            'size' => $request->get('size'),
            'stock' => $request->get('stock'),
        ];

        $productos = Producto::create($data);

        $mensaje = $productos ? 'El producto fue creado exitosamente' : 'Hubo un error al crear el producto';

        return redirect()->route('productos.index')->with('message',$mensaje);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $slug)
    {
        return $slug;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $slug)
    {
        return view('admin.productos.edit',compact('slug'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoEditRequest $request, Producto $slug)
    {
        $slug->fill($request->all());
        if($request->file('imagen') == ""){
            $slug->imagen = $request->file('imagen');
        }else{
            $slug->imagen = $request->get('imagenr');
        }

        if($request->get('activo') == "on") $slug->activo = 1;

        $actualizar = $slug->save();

        $mensaje = $actualizar ? 'Se ha actualizado correctamente' : 'Hubo un error al actualizar producto';

        return redirect()->route('productos.index')->with('message',$mensaje);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $slug)
    {
        if($slug->activo === 0){
            $eliminar = 0;
            return redirect()->route('productos.index')->with('message','Este producto ya esta eliminado');
        }else{
            $slug->activo = 0;
            $eliminar = $slug->save();
        }

        $mensaje = $eliminar ? 'El producto fue eliminado correctamente' : 'Hubo un error al procesar solicitud para eliminar';

        return redirect()->route('productos.index')->with('message',$mensaje);
    }
}
