<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArchivosObra extends Model
{
    protected $table = 'archivos_obras';
    protected $fillable = [
        'nombre_archivo','ubicacion','obra_id'
    ];

}
