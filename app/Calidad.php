<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calidad extends Model
{
    protected $table= 'calidad';

    protected $fillable = [
        'id', 'texto1', 'texto2', 'certificado1', 'certificado2'
    ];
}
