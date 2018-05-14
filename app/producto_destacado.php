<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto_destacado extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'imagen', 'nombre', 'orden', 'link'
    ];
}
