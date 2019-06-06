<?php

namespace App;

use App\Traits\OwnedByCompany;
use Illuminate\Database\Eloquent\Model;

class TiposCaracteristicas extends Model
{
    use OwnedByCompany;
    protected $fillable = ['nombre_tipo','company_id'];


    public function caracteristica_propiedad(){
        return $this->belongsTo(CaracteristicasPropiedades::class,'tipos_caracteristica_id');
    }

}
