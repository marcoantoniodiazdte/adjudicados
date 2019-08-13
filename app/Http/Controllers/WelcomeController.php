<?php

namespace App\Http\Controllers;
use App\Company;
use App\Sector;
use App\TiposPropiedades;
use App\Provincia;
use App\Municipio;
use App\Propiedades;
use Illuminate\Http\Request;
use Fadion\Fixerio\Exchange;
use Fadion\Fixerio\Currency;

class WelcomeController extends Controller
{
    public function __construct()
    {
        $this->currency = (isset($_GET['currency'])?$_GET['currency']:'');
    }
    public function index()
    {
        $provincias      = Provincia::select('provincia_id','provincia')->orderBy('provincia','asc')->get();
        $tipoPropiedades = TiposPropiedades::select('id', 'name')->get();
        $inmobiliarias   = Company::select('id', 'name')->get();
        $propiedades     = Propiedades::select('name','estado','precio_rd','precio_us','slug')->get();

        return view('welcome.index', [
            'provincias' => $provincias,
            'tipo_propiedades' => $tipoPropiedades,
            'inmobiliarias'   => $inmobiliarias,
            'propiedades'     => $propiedades
        ]);
    }

    public function search()
    {
        return view('welcome.search');
    }
    
    public function minicipalities(Request $request)
    {
        $provincias = Provincia::whereIn('provincia_id',$request->data)->get();
        $municipalities =  [];
        foreach ($provincias as $key => $value) {
            $municipalities[$key] = $value->municipios;
        }
        return $municipalities;
    }

    public function sector(Request $request)
    {
        // $municipio = Municipio::where('municipio_id', $id)->first();
        // return $municipio->sectores;
        // $secores   = $municipio->sectores;
        $municipios = Municipio::whereIn('municipio_id',$request->data)->get();
        $sectors = [];
        foreach($municipios as $key => $value)
        {
            $sectors[$key] = $value->sectores;
        }
        return $sectors;

    }

    public function exchangeEur()
    {
        // $exchange = new Exchange();
        // $exchange->base(Currency::DOP);
        // // $exchange->key('aa7c4e7cbab4e0ff8301c86876b2b3e7');
        // $exchange->symbols(Currency::EUR, Currency::USD);
        // dd($exchange);
        // $rates = $exchange->get();
        // return $rates;


        // set API Endpoint, access key, required parameters
        $endpoint = date('Y-m-d');
        $access_key = '3b25ad18dd16d35242a75b4f7f528e7c';

        $from = 'EUR';
        $to = 'USD';

        // initialize CURL:
        $ch = curl_init('http://data.fixer.io/api/'.$endpoint.'?access_key='.$access_key.'&base='.$from);   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // get the JSON data:
        $json = curl_exec($ch);
        curl_close($ch);

        // Decode JSON response:
        $conversionResult = json_decode($json, true);

        // access the conversion result
         dd($conversionResult);

    }
    
    public function exchangeUsd()
    {
        // set API Endpoint and access key (and any options of your choice)
        $endpoint = 'list';
        $access_key = 'ceafcc60472c97f4572b7c0109c5230b';

        // Initialize CURL:
        $ch = curl_init('https://apilayer.net/api/'.$endpoint.'?access_key='.$access_key.'');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Store the data:
        $json = curl_exec($ch);
        curl_close($ch);

        // Decode JSON response:
        $exchangeRates = json_decode($json, true);

        // Access the exchange rate values, e.g. GBP:
        dd($exchangeRates);
    }
  
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
