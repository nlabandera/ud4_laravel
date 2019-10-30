<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    function saluda(){
    	return view ('saludo');
    }
    function saludaNombre(){
    	return view ('saludonombre','nombre'=>$nombre);
    }
}
