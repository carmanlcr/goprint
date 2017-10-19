<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Inyecciones de dependencia

Route::bind('producto',function($slug){
	return App\Producto::where('slug',$slug)->first();
});

Route::bind('blog',function($slug){
	return App\Blog::where('slug',$slug)->first();
});

Route::bind('user',function($username){
	return App\User::find($username);
});


//******************************

Route::get('/', 'GoPrintController@index')->name('index');
Route::get('optimizar-archivo','GoPrintController@optimizar')->name('optimizar');
Route::get('crear-archivo','GoPrintController@crear')->name('crear');
Route::get('contactanos','GoPrintController@contactanos')->name('contactanos');
Route::post('enviarcorreo','GoPrintController@enviarcorreo')->name('enviarcorreo');
Route::get('/confirmarRegistro','GoPrintController@confirmarcorreo')->name('debeconfirmar');
Route::get('/auth/confirm/email/{email}/confirm_token/{_token}','GoPrintController@confirmeRegistro')->name('confirmarRegistro');
Route::get('producto/{slug}','GoPrintController@showproducto')->name('solicitudproducto');
Route::post('verorden','GoPrintController@verOrden')->name('verorden');


//Blog
Route::resource('blog','BlogController');

//User
Route::resource('user','UserController');
Route::get('/profile/{username}','UserController@profile')->name('profile');
Route::post('/avatar','UserController@avatar')->name('user.avatar');


//Socialite
	
Route::get('social/{provider?}','SocialController@getSocialAuth')->name('social.sesion');
Route::get('social/callback/{provider?}','SocialController@getSocialAuthCallBack')->name('social.respuesta');

//*****************************************


//Login, Register, ResetPassword
Auth::routes();


//Error 404, pagina no existe
Route::get('/error/404','Admin\AdminController@error')->name('error');

//Panel de administracion
Route::group(['namespace' => 'Admin','prefix' => 'administrador','middleware' => ['auth','role:Administrador']],function(){
	//El home principal del panel de administracion

	Route::get('/', 'AdminController@index')->name('admin.index');

	
	//Administra los productos
	Route::resource('productos','ProductosController');

	//Administrar los usuarios
	Route::resource('users','UserController');

	//Administrar los Pedidos
	Route::group(['prefix' => 'pedidos'],function(){

		Route::get('/','PedidosController@index')->name('pedidos.index');
		Route::post('/orden-items','PedidosController@getItems')->name('pedidos.getItems');
		Route::put('orden/{id}/destroy','PedidosController@destroy')->name('pedidos.destroy');
	});


	//Blog
	Route::resource('blogs','BlogController');

});
//******************************************

//Carrito de compras

Route::group(['prefix' => 'carrito', 'middleware' => 'auth'], function(){

	Route::get('mostrar','CartController@show')->name('mostrar_carrito');
	Route::get('agregar/{producto}','CartController@add')->name('agregar_carrito');
	Route::post('agregar/{producto}','CartController@add')->name('carrito_agregar');
	Route::get('eliminar/{producto}','CartController@delete')->name('eliminar_del_carrito');
	Route::get('vaciar','CartController@vaciar')->name('vaciar_carrito');
	Route::get('actualizar/{producto}/{cantidad?}','CartController@update')->name('actualizar_carrito');
	Route::get('detallecompra','CartController@orderDetail')->name('detalle_compra');
	Route::get('checkout','CartController@checkout')->name('checkout');
});

//****************************************************