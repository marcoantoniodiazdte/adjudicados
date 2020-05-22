<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArchivosProyectos extends Model
{
    protected $table = 'archivos_proyectos';
    protected $fillable = ['nombre_archivo','ubicacion','clase_archivo','proyecto_id'];
}
