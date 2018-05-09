<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
	protected $table= 'servicios';

    protected $fillable = [
        'id', 'nombre1_es', 'nombre1_en', 'nombre1_pt', 'imagen1', 'imagen2', 'nombre2_es', 'nombre2_en', 'nombre2_pt', 'imagen3', 'nombre3_es', 'nombre3_en', 'nombre3_pt', 'imagen4', 'nombre4_es','nombre4_en', 'nombre4_pt', 'contenido_es', 'contenido_en', 'contenido_pt'
    ];
}
