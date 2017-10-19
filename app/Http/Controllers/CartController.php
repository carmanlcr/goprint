<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Ordene;
use Auth;
class CartController extends Controller
{
    public function __construct(){
		if(!\Session::has('cart')){
			\Session::put('cart',array());
		}
	}
    // Show cart
    public function show(){
    	$carrito = \Session::get('cart');
    	$total = $this->total();
    	return view('goprint.carrito',compact('carrito','total'));

    }

    //Add Item
    public function add(Request $request, Producto $producto){
    	$carrito = \Session::get('cart');
        //Para verificar si el producto ya fue agregado al carrito
        foreach ($carrito as $cart) {
            if($producto->nombre == $cart->nombre){
                return redirect()->route('mostrar_carrito');
            }
        }
    	$producto->cantidad = $request->get('quantity');
    	$carrito[$producto->slug] = $producto;
    	\Session::put('cart',$carrito);

    	return redirect()->route('mostrar_carrito');
    }

    //Delete Item

    public function delete(Producto $producto){
    	$carrito = \Session::get('cart');
    	unset($carrito[$producto->slug]); //Unset para eliminar algun valor del array
    	\Session::put('cart',$carrito);

    	return redirect()->route('mostrar_carrito');
    }


    //Update Item
    public function update(Producto $producto, $cantidad){
    	$carrito = \Session::get('cart');
    	$carrito[$producto->slug]->cantidad = $cantidad;
    	\Session::put('cart',$carrito);

    	return redirect()->route('mostrar_carrito');
    }

    //Vaciar Cart
    public function vaciar(){
    	\Session::forget('cart'); //Forget elimina todo lo que esta en la variable

    	return redirect()->route('mostrar_carrito');
    }

    //Total


    private function total(){
    	$carrito = \Session::get('cart');
    	$total = 0;
    	foreach ($carrito as $item) {
    		$total += $item->precio * $item->cantidad;
    	}

    	return $total;
    }

    //Checkout

    public function checkout(){
        if(\Session::get('cart')){
            $cantidad_ordenes = Ordene::where('users_id',Auth::id())->first();
            $carrito = \Session::get('cart');
            $total = $this->total();
            return view('goprint.checkout',compact('carrito','total','cantidad_ordenes'));
        }

        return redirect()->route('index');
        
    }
}
