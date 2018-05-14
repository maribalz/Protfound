<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contenido_home extends Model
{
    protected $fillable = [
        'id',  'titulo', 'texto','texto_industria','sector1_texto','sector2_texto','sector3_texto','sector4_texto', 'sector1','sector2','sector3','sector4', 'link'
    ];
}
