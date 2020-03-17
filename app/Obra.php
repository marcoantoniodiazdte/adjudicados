<?php

namespace App;
use App\ArchivosObra;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    protected $table = 'obras';
    protected $fillable = [
        'tipo_id', 'precio','precio_usd','precio_eu', 'descripcion','titulo','precio_oferta','precio_oferta_usd','precio_oferta_eu','tipo_oferta'
    ];

    public function archivos(){
        return $this->hasMany(ArchivosObra::class,'obra_id');
    }
}
