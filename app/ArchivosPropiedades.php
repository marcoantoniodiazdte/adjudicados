<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArchivosPropiedades extends Model
{
    protected $fillable = ['nombre_archivo','ubicacion','clase_archivo','propiedad_id'];

}
