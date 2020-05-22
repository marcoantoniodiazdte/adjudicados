<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmobiliaria extends Model
{
    protected $table ='inmobiliarias';
    protected $fillable = [
        'nombre', 'telefono', 'rnc', 'correo', 'direccion', 'codigo_referencia', 'nota'
    ];



    public function contactos()
    {
        return $this->hasMany(Contacto::class, 'inmobiliaria_id', 'id');
    }
}
