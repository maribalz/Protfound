<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider_home extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'imagen', 'texto_es', 'texto_en', 'texto_pt', 'orden'
    ];
}
