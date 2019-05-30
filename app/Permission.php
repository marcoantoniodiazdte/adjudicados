<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends  SpatiePermission
{

    public function module(){
        return $this->belongsTo('App\Module','modulo_id');
    }

}