<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiposPropiedades extends Model
{

    protected $table = 'tipos_propiedades';
    protected $fillable = ['name'];

    public function propiedades(){
        return $this->belongsToMany('App\Propiedades','propiedades_tipos');
    }


}
