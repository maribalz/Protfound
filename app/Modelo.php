<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $table= 'modelos';

    protected $fillable = [
        'id', 'id_producto', 'titulo_es', 'titulo_en', 'titulo_pt' , 'contenido_es', 'contenido_en', 'contenido_pt', 'orden'
    ];
}
