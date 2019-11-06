<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    function show(){
    	return view('formulario-contacto');
    }
    function show2(){
    	return view('formulario-idiomas');
    }
}
