<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class redes_social extends Model
{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nombre', 'link', 'logo', 'ubicacion'
    ];
}
