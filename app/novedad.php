<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class novedad extends Model
{
    protected $table= 'novedades';

    protected $fillable = [
        'id', 'nombre_es','nombre_en','nombre_pt', 'imagen','imagen_maxi', 'fecha', 'texto_es', 'texto_en', 'texto_pt', 'texto_breve_es','texto_breve_en','texto_breve_pt', 'id_categoria', 'orden','ficha_es','ficha_en','ficha_pt'
    ];
}
