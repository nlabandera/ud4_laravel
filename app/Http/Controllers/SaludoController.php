<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;

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
		$path = 'database/data/idiomas.json';
		$idiomas = json_decode(file_get_contents($path,true));
		return view ('saluda-idiomas',['nombre'=>request('nombre'),'apellido'=>request('apellido'),'idiomas'=>"abc"]);
	}
}
