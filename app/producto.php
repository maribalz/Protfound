<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table= 'productos';

    protected $fillable = [
        'id', 'nombre',  'imagen', 'descripcion', 'texto','video', 'texto_video', 'ficha','orden', 'id_familia'
    ];
}
