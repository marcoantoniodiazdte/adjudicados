<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = ['name','description'];

    public function company(){
        return $this->belongsToMany('App\Company','company_module','id');
    }

    public function permissions()
    {
        return $this->hasMany(Permission::class,'modulo_id');
    }
}
