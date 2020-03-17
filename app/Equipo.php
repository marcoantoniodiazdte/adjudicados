<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ArchivosEquipo;

class Equipo extends Model
{
    protected $table = 'equipos';
    protected $fillable = [
        'tipo_id', 'precio','precio_usd','precio_eu', 'descripcion','titulo','precio_oferta','precio_oferta_usd','precio_oferta_eu','tipo_oferta'
    ];

    public function archivos(){
        return $this->hasMany(ArchivosEquipo::class,'equipo_id');
    }
}
