<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    protected $table= 'familias';

    protected $fillable = [
        'id', 'nombre', 'orden','imagen'
    ];
}
