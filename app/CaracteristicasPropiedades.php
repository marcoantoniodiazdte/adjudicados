<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaracteristicasPropiedades extends Model
{
    protected $fillable = ['propiedad_id','tipos_caracteristica_id'];

    public function propiedad(){
        return $this->belongsTo(Propiedades::class,'id');
    }

    public function tipo_caracteristica(){
        return $this->hasOne(TiposCaracteristicas::class,'id');
    }

}
