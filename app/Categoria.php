<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;

    // protected $casts = ['id' => 'string'];


    protected $table = 'categorias';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre', 'descripcion'
    ];


  


    public function requisitos()
    {
        return $this->hasMany(Requisito::class, 'categoria_id', 'id');
    }
}
