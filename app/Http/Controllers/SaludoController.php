<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\View\Middleware\ShareErrorsFromSession; 
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ContactoRequest;
use App\Http\Requests\DniRequest;
use App\Rules\DniRule;


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
		$path = '/database/data/idiomas.json';
		$idiomas = file_get_contents(base_path($path));
		for ($i=0; $i<sizeof($idiomas); $i++){
			$lenguas = json_decode($idiomas);
		}
		return view ('saluda-idiomas',['nombre'=>request('nombre'),'apellido'=>request('apellido'),'idiomas'=>$idiomas]);
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
	function muestraDatos2(ContactoRequest $request){

		return view('muestra-datos')->with('nombre',$request->input('nombre'))->with('apellido',$request->input('apellido'))->with('email',$request->input('email'))->with('telf',$request->input('telf'));
		
	}
	function muestraDatosDNI(DniRequest $request){
		$validatedData = $request->validate(['dni'=>['required', new DniRule]]);


		return view('muestra-datos-dni')->with('nombre',$request->input('nombre'))->with('apellido',$request->input('apellido'))->with('dni',$request->input('dni'))->with('email',$request->input('email'))->with('telf',$request->input('telf'));
		
	}
	
}
