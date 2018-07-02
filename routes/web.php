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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', function () {
    return view('admin.cpanel');
});

Route::resource('admin/paquetes','PaquetesController');

Route::resource('admin/categorias','CategoriaController');

Route::resource('admin/imagenes','ImagenController');