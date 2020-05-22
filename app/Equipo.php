<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ArchivosEquipo;

class Equipo extends Model
{
    protected $table = 'equipos';
    protected $fillable = [
        'tipo_id', 'precio','precio_usd','precio_eu', 'descripcion',
        'titulo','precio_oferta','precio_oferta_usd','precio_oferta_eu',
        'tipo_oferta','codigo_referencia', 'vendido','monto', 'monto_oferta', 'moneda'
    ];

    public function archivos(){
        return $this->hasMany(ArchivosEquipo::class,'equipo_id');
    }


    public function favorite(){
        $id = \Auth::id();
        return $this->hasOne(Oportunidad::class,"anuncio_id","id")
                ->where("usuario_id",$id)
                ->where("tipo","equipo")
                ->where("favorito", 1);
    }


    public function offer() {
        $id = \Auth::id();
        return $this->hasOne(Oportunidad::class,"anuncio_id","id")
                ->where("usuario_id",$id)
                ->where("tipo","equipo")
                ->where("favorito",0);
    }


    public function isFavorite(){
        return $this->favorite != null ? true : false;
    }


    public function isOffer() {
        return $this->offer != null ? true : false;
    }
}
