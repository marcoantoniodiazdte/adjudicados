<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{
 
    protected $table = "requisitos";
    protected $fillable = [
        'nombre', 'descripcion', 'categoria_id'
    ];


    public function categoria()
    {
        return $this->hasOne(Categoria::class, 'id', 'categoria_id');
    }

}
