<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoObra extends Model
{
    protected $table = 'tipo_obras';
    protected $fillable = [
      'nombre','descripcion'  
    ];
}
