<?php

namespace App\Traits;
use App\Inmobiliaria;
use App\Scopes\CompanyScope;
use App\Scopes\InmobiliariaOwnedScope;
use App\Scopes\TenantScope;
use Illuminate\Support\Facades\Auth;

trait OwnedByCompany
{

    public static function bootOwnedByCompany(){
        static::addGlobalScope(new CompanyScope());


        static::creating(function ($model) {
            if(property_exists($model,'company_id')){
                $model->company_id = Auth::user()->company_id;
            }
        });


    }

    public function company(){
        return $this->belongsTo('App\Company');
    }





}