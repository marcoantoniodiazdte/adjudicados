<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Favorite extends Model
{
    protected $table = 'favorites';

    public static function allFavorites(){
        $id = \Auth::id();
        $favorites = Favorite::where("user_id",$id)->get();
        return $favorites->keyBy(function($favorite){
            return $favorite->ad_id."_".$favorite->ad_type;
        });
    }

    public function vehiculos(){
        return $this->belongsTo('App\Vehiculo', 'id', 'ad_id');
    }

    public function propiedades(){
        return $this->belongsTo('App\Vehiculo', 'id', 'ad_id');
    }
}