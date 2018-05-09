<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $table= 'categorias';

    protected $fillable = [
        'id', 'nombre_es','nombre_en','nombre_pt', 'orden'
    ];
}
