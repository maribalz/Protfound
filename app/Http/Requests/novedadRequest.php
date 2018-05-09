<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class novedadRequest extends FormRequest
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
            'nombre_es'=> 'min:4|max:200|required',
            'fecha'=> 'min:4|max:300',
            'imagen'=> 'image',
            'texto_breve_es'=> 'max:2000',
            'texto_es'=> 'max:4000'
        ];
    }
}
