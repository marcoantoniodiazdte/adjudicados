<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = 'contactos';
    protected $fillable = [
        'inmobiliaria_id', 'nombre', 'telefono', 'celular', 'correo'
    ];
}
