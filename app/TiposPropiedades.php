<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiposPropiedades extends Model
{

    protected $fillable = ['name'];

    public function propiedades(){
        return $this->belongsToMany('App\Propiedades','propiedades_tipos');
    }


}
