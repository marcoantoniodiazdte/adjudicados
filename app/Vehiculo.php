<?php

namespace App;
use App\ArchivosVehiculo;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';
    protected $fillable = [
        'descripcion','marca_id','fecha_fabricacion','precio','precio_oferta','precio_usd','precio_eu','precio_oferta_usd','precio_oferta_eu','titulo','precio_oferta','tipo_oferta'
    ];


    public function archivos(){
        return $this->hasMany(ArchivosVehiculo::class,'vehiculo_id');
    }
}
