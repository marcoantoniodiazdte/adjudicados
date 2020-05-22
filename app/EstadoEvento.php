<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoEvento extends Model
{
    protected $table = "estados_eventos";
    protected $fillable = [
        'nombre', 'descripcion', 'color', 'color_letra','oportunidad_id'
    ];
}
