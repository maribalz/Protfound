<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeria extends Model
{
    protected $fillable = [
        'id', 'imagen', 'orden','id_producto'
    ];
}
