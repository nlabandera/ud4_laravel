<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //IMPORTANTE: Tiene que estar en TRUE para que funcione
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|min:2|max:15',
            'apellido'=>'required|min:2|max:45',
            'email'=>'required|email',
            'telf'=>'required:regex:/^[0-9]$/'
        ];
    }
    
}

