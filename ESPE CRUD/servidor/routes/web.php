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
    return 'hola';
});

//facturas
Route::get('/factura', 'FacturaController@getFacturas');
Route::post('/factura', 'FacturaController@postFacturas');
Route::put('/factura', 'FacturaController@putFacturas');
Route::delete('/factura', 'FacturaController@deleteFacturas');


//personas
Route::get('/persona', 'PersonaController@getPersonas');
Route::post('/persona', 'PersonaController@postPersonas');
Route::put('/persona', 'PersonaController@putPersonas');
Route::delete('/persona', 'PersonaController@deletePersonas');


//categoria
Route::get('/persona', 'PersonaController@getPersonas');
Route::post('/categoria', 'CategoriaController@postCategorias');
Route::put('/categoria', 'CategoriaController@putCategorias');
Route::delete('/categoria', 'CategoriaController@deleteCategorias');

//prodcuto
Route::get('/producto', 'PersonaController@getPersonas');
Route::post('/producto', 'ProductoController@postProductos');
Route::put('/producto', 'ProductoController@putProductos');
Route::delete('/producto', 'ProductoController@deleteProducto');

//detalle
Route::get('/detalle', 'PersonaController@getDetalles');
Route::post('/detalle', 'DetalleController@postDetalles');
Route::put('/detalle', 'DetalleController@putDetalles');
Route::delete('/detalle', 'DetalleController@deleteDetalles');
