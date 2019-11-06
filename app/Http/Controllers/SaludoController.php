<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\File;

class SaludoController extends Controller
{
    function saluda(){
    	return view ('saludo');
    }
    function saludaNombre(){
    	return view ('saludonombre',['nombre'=>request('nombre'),'apellido'=>request('apellido')]);
    }
    function saludaColor($nombre,$color){
    	return view ('saludocolor',['nombre'=>$nombre,'color'=>$color]);
    }
    function saludaIdiomas(){
    	$json = file_get_contents(base_path('/resources/js/idiomas.json'));
    	$lenguajes = json_decode($json);
    	return view ('saluda-idiomas',['nombre'=>request('nombre'),'apellido'=>request('apellido'),'lenguajes'=>$lenguajes]);
    }
}
