<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
            'nombre'=> 'max:300|required',
            'imagen'=> 'image',
            'orden' => 'required'
            'texto'=> 'max:5000',
            'video'=> 'max:400',
            'tabla1'=> 'image',
            'descripcion1'=> 'max:000',
            'titulo1' => 'max:300',
            'plano1' => 'image',
            'tabla2'=> 'image',
            'descripcion2'=> 'max:000',
            'titulo2' => 'max:300',
            'plano2' => 'image'

        ];
    }
}
