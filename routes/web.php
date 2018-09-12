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

/* Route::get('/', function () {

$paquetes=App\Paquete::all();
$paquetes = App\Paquete::where('categoria_id','1');

return $paquetes;
     return view('home',["paquetes"=>$paquetes]);
}); */

Route::get('/','PaquetesController@mostrar');

Route::get('admin', function () {
    return view('admin.cpanel');
});

Route::resource('admin/paquetes','PaquetesController');

Route::resource('admin/categorias','CategoriaController');



Route::post('admin/paquetes/{id}', 'ImagenController@store')->name('imagenes.store');

Route::resource('admin/destinos','DestinosController');

/* frontend */

Route::get('paquetes','PaquetesController@indexpaquetes'); /* todos los paquetes */

Route::get('paquetes/destinos','PaquetesController@destinos'); /* filtrado de paquetes por destino */

Route::get('sub-header','PaquetesController@subheader'); /* vista general del sub-header */

Route::get('paquetes/{id}','PaquetesController@paquetes')->name('paquetes.categoria'); /* paquetes por categoria */

Route::get('paquetes/detalle/{id}','PaquetesController@paquetedetalle'); /* detalle paquete seleccionado */

Route::get('promociones','PaquetesController@promociones'); /* todos los paquetes promocionales */

Route::get('promociones/{id}','PaquetesController@promocategoria')->name('promociones.index'); /* paquetes promocionales por categoria */

Route::get('bancos','PaquetesController@bancos'); /* bancos disponibles */

Route::get('bancos/paquetes/{id}','PaquetesController@bancospaquetes'); /* paquetes de un banco seleccionado */



Route::get('circuitos','PaquetesController@circuitos'); /* ruta circuitos asia europa */

Route::get('cruceros','PaquetesController@cruceros'); /* vista cruceros con logos */

Route::get('cruceros/{id}','PaquetesController@crucerospaquetes'); /* paquetes promocionales por proveedor de crucero */

Route::get('vuelos','PaquetesController@vuelos'); /* vista vuelos */

Route::get('trenes','PaquetesController@trenes'); /* vista de trenes*/

Route::get('autos','PaquetesController@autos'); /* vista de autos*/

Route::get('seguros','PaquetesController@seguros'); /* vista de seguros*/

Route::get('contacto','PaquetesController@contacto'); /* vista de contacto*/

Route::get('paquetes/categoria','PaquetesController@filtro')->name('paquetes.categoria');

Route::get('download/{file}' , 'PaquetesController@downloadFile'); /* descarga pdf paquetes */

/*            rutas del footer           */

Route::get('quienes-somos', function () {
    return view('footer.quienes-somos');
});

Route::get('trabaje-nosotros', function () {
    return view('footer.trabaje-nosotros');
});

Route::get('membresia', function () {
    return view('footer.membresia');
});

Route::get('terminosycondiciones', function () {
    return view('footer.terminosycondiciones');
});

Route::get('metodos-pago', function () {
    return view('footer.metodos-pago');
});
