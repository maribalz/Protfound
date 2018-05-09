<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $table= 'sectores';

    protected $fillable = [
        'id', 'titulo_es', 'titulo_en', 'titulo_pt' , 'imagen','orden'
    ];
}
