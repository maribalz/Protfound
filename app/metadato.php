<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class metadato extends Model
{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'seccion', 'keywords', 'description'
    ];
}
