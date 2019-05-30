<?php

namespace App;

use App\Traits\OwnedByCompany;
use Illuminate\Database\Eloquent\Model;

class Propiedades extends Model
{

    use OwnedByCompany;

    protected $fillable = ['name','tenant_id'];

    public function tiposPropiedad(){
        return $this->belongsToMany('App\TiposPropiedades','propiedades_tipos');
    }

    public function caracteristicas(){
        return $this->hasMany(CaracteristicasPropiedades::class,'propiedad_id');
    }
}
