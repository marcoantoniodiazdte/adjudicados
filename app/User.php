<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use HasRoles;


    protected $guard_name = 'web';
    protected $guard = 'web';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    public function vehiculos(){
        return $this->hasMany(Oportunidad::class,"usuario_id","id")
                ->where("tipo","vehiculo")
                ->where("favorito", 1);
    }


    public function propiedades(){
        return $this->hasMany(Oportunidad::class,"usuario_id","id")
                ->where("tipo","propiedad")
                ->where("favorito", 1);
    }

    public function proyectos(){
        return $this->hasMany(Oportunidad::class,"usuario_id","id")
                ->where("tipo","proyecto")
                ->where("favorito", 1);
    }

    public function obras(){
        return $this->hasMany(Oportunidad::class,"usuario_id","id")
                ->where("tipo","obra")
                ->where("favorito", 1);
    }

    public function equipos(){
        return $this->hasMany(Oportunidad::class,"usuario_id","id")
                ->where("tipo","equipo")
                ->where("favorito", 1);
    }



    public function vehiculos_oferta() {
        return $this->hasMany(Oportunidad::class,"usuario_id","id")
        ->where("tipo","vehiculo")
        ->where("favorito", 0);
    }

    public function propiedades_oferta() {
        return $this->hasMany(Oportunidad::class,"usuario_id","id")
        ->where("tipo","propiedad")
        ->where("favorito", 0);
    }


    public function proyectos_oferta() {
        return $this->hasMany(Oportunidad::class,"usuario_id","id")
        ->where("tipo","proyecto")
        ->where("favorito", 0);
    }

    public function obras_oferta() {
        return $this->hasMany(Oportunidad::class,"usuario_id","id")
        ->where("tipo","obra")
        ->where("favorito", 0);
    }

    public function equipos_oferta() {
        return $this->hasMany(Oportunidad::class,"usuario_id","id")
        ->where("tipo","equipo")
        ->where("favorito", 0);
    }

}
