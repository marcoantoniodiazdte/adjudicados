<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $fillable = [
        'municipio_id'
    ];
    public function sectores(){
        return $this->hasMany(Sector::class,'municipio_id','municipio_id');
    }
}
