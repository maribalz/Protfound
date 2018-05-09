<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contenido_home extends Model
{
    protected $fillable = [
        'id',  'titulo_es', 'titulo_en', 'titulo_pt', 'texto_es','texto_en', 'texto_pt','link'
    ];
}
