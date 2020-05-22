<?php

namespace App;
use App\ArchivosVehiculo;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';
    protected $fillable = [
        'descripcion','marca_id','fecha_fabricacion','precio',
        'precio_oferta','precio_usd','precio_eu','precio_oferta_usd',
        'precio_oferta_eu','titulo','precio_oferta','tipo_oferta',
        'codigo_referencia','vendido', 'monto', 'monto_oferta', 'moneda'
    ];


    public function archivos(){
        return $this->hasMany(ArchivosVehiculo::class,'vehiculo_id');
    }

    public function favorite(){
        $id = \Auth::id();
        return $this->hasOne(Oportunidad::class,"anuncio_id","id")
                ->where("usuario_id",$id)
                ->where("tipo","vehiculo")
                ->where("favorito", 1);
    }


    public function offer() {
        $id = \Auth::id();
        return $this->hasOne(Oportunidad::class,"anuncio_id","id")
                ->where("usuario_id",$id)
                ->where("tipo","vehiculo")
                ->where("favorito",0);
    }


    public function isFavorite(){
        return $this->favorite != null ? true : false;
    }


    public function isOffer() {
        return $this->offer != null ? true : false;
    }






 

}
