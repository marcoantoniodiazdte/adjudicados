<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArchivosVehiculo extends Model
{
    protected $table = 'archivos_vehiculos';
    protected $fillable = [
        'nombre_archivo','ubicacion','vehiculo_id'
    ];
}
