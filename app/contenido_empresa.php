<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contenido_empresa extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','titulo', 'texto1','texto2', 'texto_video', 'imagen','video'
    ];
}
