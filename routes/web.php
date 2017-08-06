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

Route::get('/','CartaController@listarCartas');
Route::get('/listar/productos','ProductoController@listarProductos');
Route::get('carta/nuevo/{n_productos}','CartaController@nuevo');
Route::get('carta/editar/{id}','CartaController@editar');
Route::post('carta/crear','CartaController@crear');
Route::post('carta/actualizar/{id_carta}/{id_producto}','CartaController@actualizar');
Route::get('carta/imprimir/{id}','CartaController@imprimir');
Route::get('producto/eliminar/{id}/{id_carta}','CartaController@eliminarProducto');
Route::get('carta/anadir-productos/{id_carta}/{n_productos}','CartaController@anadirProductos');
Route::post('carta/guardar-productos-anadidos/{id}','CartaController@guardarProductosAnadidos');
