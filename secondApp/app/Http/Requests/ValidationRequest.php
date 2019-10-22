<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationRequest extends FormRequest
{
    public function attributes(){
        return [
            'login'      => 'nombre de usuario',   
            'password'   => 'clave de acceso',
            'email'      => 'correo electrónico',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
     
    public function authorize()
    {
        return true;
    }
    
    public function messages(){
        $required = 'El campo :attribute es obligatorio';
        $min      = 'La longitud mínima del campo :attribute es :min.';
        $max      = 'La longitud máxima del campo :attribute es :max.';
        $comun    = 'El campo :attribute no tiene un formato válido ';

        return [
            'login.required'     => $required,
            'login.min'          => $min,
            'login.max'          => $max,
            'login.alpha_num'    => 'Los caracteres permitidos son alfanuméricos ',
            'password.required'  => $required,
            'password.numeric'   => 'Los caracteres permitidos son númericos',
            'email.required'     => $required,
            
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
     
    public function rules(){ // reglas de validacion llamar al validated de request que utiliza las reglas introducidas aqui para hacer la validadcion
        return [
            'login'      => 'required|min:5|max:10|alpha_num',   
            'password'   => 'required|numeric',
            'email'      => 'required',
        ];
    }
}
