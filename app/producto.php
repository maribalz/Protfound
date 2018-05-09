<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table= 'productos';

    protected $fillable = [
        'id', 'nombre_es', 'nombre_en', 'nombre_pt', 'imagen', 'contenido_es', 'contenido_en', 'contenido_pt', 'ficha_es', 'ficha_en', 'ficha_pt','orden'
    ];
}
