<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    protected $fillable = ['name','short_name'];


    const TIPOS_CUENTAS = ['corriente' => 'Corriente','ahorros'=> 'Ahorros'];
    const TIPOS_MONEDAS = ['USD','DOP'];

    public function company(){
        return $this->belongsToMany('App\Company')->withPivot('tipo_cuenta', 'tipo_moneda','numero_cuenta')->withTimestamps();
    }



}
