<?php

namespace App;
use App\ArchivosVehiculo;
use Illuminate\Database\Eloquent\Model;

class Oportunidad extends Model
{
    protected $table = 'oportunidades';
    protected $fillable = [
        'usuario_id', 'anuncio_id', 'monto', 'fecha', 'fecha_eliminacion', 'favorito', 'tipo', 'estado_id', 'observacion'
    ];

    public $timestamps = false;

    public function estado()
    {
        return $this->hasOne(Estado::class, 'id', 'estado_id');
    }

    public function cliente()
    {
        return $this->hasOne(User::class, 'id', 'usuario_id');
    }


    public function eventos()
    {
        return $this->hasMany(Evento::class, 'oportunidad_id', 'id');
    }


    public function anuncio() {
        

        // if($this->tipo == 'propiedad') {
        //     return $this->hasOne(Propiedades::class,"id","anuncio_id");
        // }

        // if($this->tipo == 'proyecto') {
        //     return $this->hasOne(ProyectoFinanciado::class,"id","anuncio_id");
        // }

        // if($this->tipo == 'vehiculo') {
        //     return $this->hasOne(Vehiculo::class,"id","anuncio_id");
        // }

        // if($this->tipo == 'obra') {
        //     return $this->hasOne(Obra::class,"id","anuncio_id");
        // }

        // if($this->tipo == 'equipos') {
        //     return $this->hasOne(Equipo::class,"id","anuncio_id");
        // }
    }
    
}
