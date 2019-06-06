<?php

namespace App;

use App\Traits\OwnedByCompany;
use Illuminate\Database\Eloquent\Model;

class TiposAtributos extends Model
{
    protected $fillable = ['nombre','icono'];
}
