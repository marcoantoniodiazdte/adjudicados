<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProyectoFinanciado extends Model
{
    protected $table = 'proyectos';
    protected $fillable = [
        'name', 
        'estado',
        'direccion',
        'area',
        'descripcion',
        'tipo_oferta',
        'precio_us',
        'precio_rd',
        'precio_eur',
        'precio_oferta_us',
        'precio_oferta_rd',
        'precio_oferta_eu',
        'mostrar_precio',
        'estado_publicacion',
        'inmobiliaria_id',
        'provincia_id',
        'municipio_id',
        'sector_id',
        'codigo_referencia',
        'mapa_url',
        'habitaciones',
        'tipo_id',
        'vendido',
        'monto',
        'monto_oferta',
        'moneda'
    ];




    public function archivos(){
        return $this->hasMany(ArchivosProyectos::class,'proyecto_id');
    }

        
    public function favorite(){
        $id = \Auth::id();
        return $this->hasOne(Oportunidad::class,"anuncio_id","id")
                ->where("usuario_id",$id)
                ->where("tipo","proyecto")
                ->where("favorito", 1);
    }


    public function offer() {
        $id = \Auth::id();
        return $this->hasOne(Oportunidad::class,"anuncio_id","id")
                ->where("usuario_id",$id)
                ->where("tipo","proyecto")
                ->where("favorito",0);
    }

  

    public function inmobiliaria()
    {
        return $this->belongsTo(Inmobiliaria::class, 'inmobiliaria_id', 'id');
    }


    public function isFavorite(){
        return $this->favorite != null ? true : false;
    }


    public function isOffer() {
        return $this->offer != null ? true : false;
    }

}
