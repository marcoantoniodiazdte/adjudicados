<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEquipo extends Model
{
    protected $table = 'tipo_equipos';
    protected $fillable = [
        'nombre','descripcion'  
    ];

}
