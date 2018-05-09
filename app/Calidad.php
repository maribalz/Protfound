<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calidad extends Model
{
    protected $table= 'calidad';

    protected $fillable = [
        'id', 'contenido_es', 'contenido_en', 'contenido_pt', 'titulo_es', 'titulo_en', 'titulo_pt'
    ];
}
