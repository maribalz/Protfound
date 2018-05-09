<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FamiliaRequest extends FormRequest
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
            'titulo'=> 'min:4|max:300|required',
            'texto'=> 'max:4000',
            'imagen'=> 'image',
            'imagen_maxi'=> 'image|nullable',
            'orden'=> 'required'
        ];
    }
}
