<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{

    protected $table = 'eventos';
    protected $fillable = [
        'nombre', 'descripcion', 'observacion', 'analista_id', 'estado_evento_id', 'oportunidad_id'
    ];

    public function estado()
    {
        return $this->hasOne(EstadoEvento::class, 'id', 'estado_evento_id');
    }

    public function analista() {
        return $this->hasOne(Admin::class, 'id', 'analista_id');
    }

    public function oportunidad() {
        return $this->hasOne(Oportunidad::class, 'id','oportunidad_id');
    }
}
