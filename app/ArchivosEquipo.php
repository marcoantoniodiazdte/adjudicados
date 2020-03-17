<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArchivosEquipo extends Model
{
    protected $table = 'archivos_equipos';
    protected $fillable = [
        'nombre_archivo',
        'ubicacion',
        'equipo_id'
    ];
}
