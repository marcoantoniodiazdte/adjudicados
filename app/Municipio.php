<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{

    public function sectores(){
        return $this->hasMany(Sector::class,'municipio_id','municipio_id');
    }
}
