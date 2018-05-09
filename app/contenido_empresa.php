<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contenido_empresa extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','titulo_es', 'titulo_en', 'titulo_pt', 'texto_es','texto_en', 'texto_pt', 'imagen'
    ];
}
