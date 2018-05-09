<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Contacto extends FormRequest
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
            'nombre'=> 'min:3|max:30|required',
            'telefono'=> 'min:3|max:30',
            'email'=> 'min:8|max:40|email'

        ];
    }
}
