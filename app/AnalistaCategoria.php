<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnalistaCategoria extends Model
{
    protected $table = 'analista_categoria_pivot';
    protected $fillable = [
        "analista_id",
        "categoria_id"
    ];

}
