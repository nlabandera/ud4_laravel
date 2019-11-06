<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
