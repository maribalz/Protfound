<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Descarga extends Model
{
    protected $table= 'descargas';

    protected $fillable = [
        'id', 'archivo_es', 'orden', 'archivo_en', 'archivo_pt', 'nombre_es', 'nombre_en', 'nombre_pt'
    ];
}
