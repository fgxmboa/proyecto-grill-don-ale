<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'apellido' => 'required',
            'cedula' => 'required|numeric',
            'email' => 'required|email',
            'telefono' => 'required',
            'direccion' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre del cliente es un campo que debe completar',
            'apellido.required' => 'El apellido del cliente es un campo que debe completar',
            'cedula.required' => 'La cedula es un campo que debe completar',
            'email.required' => 'El correo electronico es un campo que debe completar',
            'telefono.required' => 'El telefono es un campo que debe completar',
            'direccion.required' => 'La direccion es un campo que debe completar',
        ];
    }

}
