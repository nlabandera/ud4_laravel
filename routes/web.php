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
})->name('welcome');

Route::get('/rutas_vistas', function(){
	return view('rutas_vistas');
})->name('rutas_vistas');

Route::get('/rutas_vistas/contacto', function(){
	return view('contacto');
})->name('contacto');

Route::get('/rutas_vistas/blog/{id}', function($id){
	return view('blog',['id'=>$id]);
})->name('blog');

Route::get('/rutas_vistas/blog_id/{id}/{nombre}', function($id,$nombre){
	return view('blog_id',['id'=>$id, 'nombre'=>$nombre]);
})->where(array('id'=>'[0-9]+', 'nombre'=>'[a-zA-z]+')) ->name('blog_id');