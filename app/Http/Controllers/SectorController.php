<?php

namespace App\Http\Controllers;
use App\Sector;

class SectorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');

    }

    public function get_sectores_by_municipio($municipio_id){

        $sectores = Sector::where('municipio_id',$municipio_id)->get();
        return response()->json(['data' => $sectores]);
    }
}
