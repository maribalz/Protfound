<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider_empresa extends Model
{
     protected $fillable = [
        'id', 'imagen', 'texto','orden'
    ];

}
