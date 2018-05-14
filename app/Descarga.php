<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Descarga extends Model
{
    protected $table= 'descargas';

    protected $fillable = [
        'id', 'archivo', 'orden', 'nombre'
    ];
}
