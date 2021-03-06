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
//Valida para todos los parametros id desde cualquier ruta
Route::pattern('id','[0-9]+');
//valida para todos los parametros nombre desde cualquier ruta
Route::pattern('nombre','[A-Za-z]+');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//Ruta del ejercicio 4.1
Route::get('/rutas_vistas', function(){
	return view('rutas_vistas');
})->name('rutas_vistas');

//Ruta del ejercicio 4.1->contacto
Route::get('/rutas_vistas/contacto', function(){
	return view('contacto');
})->name('contacto');
//Ruta del ejercicio 4.1->blog
Route::get('/rutas_vistas/blog/{id}', function($id){
	return view('blog',['id'=>$id]);
})->name('blog');
//Ruta del ejercicio 4.1->blog con ide
Route::get('/rutas_vistas/blog_id/{id}/{nombre}', function($id,$nombre){
	return view('blog_id',['id'=>$id, 'nombre'=>$nombre]);
})->where(array('id'=>'[0-9]+', 'nombre'=>'[a-zA-z]+')) ->name('blog_id');


//Ruta del ejercicio 4.2
Route::get('/vista_controlador',function(){
	return view('vista_controlador');
})->name('vista_controlador');

Route::get('saludo','SaludoController@saluda')->name('saludo');
Route::get('saludonombre/{nombre}/{apellido}','SaludoController@saludaNombre')->name('saludonombre');
Route::get('saludocolor/{nombre}/{color}','SaludoController@saludaColor')->name('saludocolor');


				// Ruta del ejercicio 4.3

Route::get('/formulario',function(){
	return view('formulario'); //Si está en una carpeta formularios.formulario
})->name('formulario');

//Apartado A
Route::get('formulario-contacto','FormularioController@show')->name('formulario-contacto');

Route::get('formulario-contacto/get','SaludoController@saludaNombre')->name('saludonombre2');

//Apartado B -->No terminado
Route::get('formulario-idiomas','FormularioController@show2')->name('formulario-idiomas');

Route::post('formulario-idiomas/post','SaludoController@saludaIdiomas')->name('saludoidiomas');


				//Ruta del ejercicio 4.3
Route::get('/formulario-validacion', function(){
	return view('formulario-validacion');
})->name('formulario-validacion');
//Apartado A
Route::get('formulario4','FormularioController@show3')->name('formulario4');
Route::post('formulario4/post','SaludoController@muestraDatos2')->name('muestra-datos');
//Apartado B
Route::get('formulario-dni','FormularioController@show4')->name('formulario-dni');
Route::post('formulario-dni/post','SaludoController@muestraDatosDNI')->name('muestra-datos-dni');