<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto_destacado extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'imagen', 'nombre_es','nombre_en','nombre_pt','texto_es','texto_en', 'texto_pt', 'orden', 'link'
    ];
}
