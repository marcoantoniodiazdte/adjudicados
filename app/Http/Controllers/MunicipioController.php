<?php

namespace App\Http\Controllers;

use App\Municipio;

class MunicipioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');

    }

    public function get_municipios_by_pronvicia($procincia_id){

        $provincia = Municipio::where('provincia_id',$procincia_id)->get();
        return response()->json(['data' => $provincia]);
    }




}
