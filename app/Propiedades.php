<?php

namespace App;

use App\Traits\OwnedByCompany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Propiedades extends Model
{

    use OwnedByCompany;



    protected $fillable = ['name','estado','clase','descripcion',
                            'direccion','tipo_oferta','precio_us','precio_rd',
                            'mostrar_precio','slug','estado','estado_comercial','company_id',
                            'provincia_id','municipio_id','sector_id','estado_publicacion'];



    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

        static::creating(function ($model) {
            $model->company_id = Auth::user()->company_id;
            $model->slug = str_slug($model->name).$model->id;

        });
    }


    public function getRouteKeyName()
    {
        return 'slug';
    }




    public function tiposPropiedad(){
        return $this->belongsToMany('App\TiposPropiedades','propiedades_tipos');
    }

    public function atributos(){
        return $this->hasMany(AtributosPropiedades::class,'propiedad_id');
    }
    public function caracteristicas(){
        return $this->hasMany(CaracteristicasPropiedades::class,'propiedad_id');
    }

    public function arhivosPropiedad(){
        return $this->hasMany(ArchivosPropiedades::class,'propiedad_id');
    }

    public function provincia(){
        return $this->belongsTo(Provincia::class,'provincia_id','provincia_id');
    }

    public function municipio(){
        return $this->belongsTo(Municipio::class,'municipio_id','municipio_id');
    }

    public function sector(){
        return $this->belongsTo(Sector::class,'sector_id','sector_id');
    }


}
