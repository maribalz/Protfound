<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
	protected $table= 'servicios';

    protected $fillable = [
        'id','texto', 'imagen', 'orden'
    ];
}
