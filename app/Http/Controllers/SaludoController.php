<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    function saluda(){
    	return view ('saludo');
    }
    function saludaNombre($nombre,$apellido){
    	return view ('saludonombre',['nombre'=>$nombre,'apellido'=>$apellido]);
    }
    function saludaColor($nombre,$color){
    	return view ('saludocolor',['nombre'=>$nombre,'color'=>$color]);
    }
}
