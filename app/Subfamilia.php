<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subfamilia extends Model
{
    protected $table= 'subfamilia';

    protected $fillable = [
        'id', 'orden', 'nombre_es', 'nombre_en', 'nombre_pt'
    ];
}
