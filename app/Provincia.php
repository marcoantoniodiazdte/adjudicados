<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $primaryKey = 'provincia_id';
    protected $table = 'provincias';
    protected $fillable = [
        'provincia','zona_id'
    ];
    

    public function municipios(){
        return $this->hasMany(Municipio::class,'provincia_id','provincia_id');
    }
}
