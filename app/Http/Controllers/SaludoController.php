<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\View\Middleware\ShareErrorsFromSession; 
use Illuminate\Support\Facades\Validator;


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
		//No reconoce el fichero
		$path = 'database/data/idiomas.json';
		$idiomas = json_decode(file_get_contents($path,true));
		return view ('saluda-idiomas',['nombre'=>request('nombre'),'apellido'=>request('apellido'),'idiomas'=>"abc"]);
	}
	
	function muestraDatos(Request $request){
		
		$request->validate([
			'nombre' => 'required|min:2|max:15',
			'apellido'=>'required|min:2|max:45',
			'email'=>'required|email',
			'telf'=>'required'
		]);

		return view('muestra-datos')->with('nombre',$request->input('nombre'))->with('apellido',$request->input('apellido'))->with('email',$request->input('email'))->with('telf',$request->input('telf'));


		
		
	}
	
}
