<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropiedadRequestForm;
use App\Municipio;
use App\Propiedades;
use App\Provincia;
use App\Sector;
use App\ArchivosPropiedades;
use App\TiposPropiedades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Response;

class PropiedadesController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:admin');
        $this->middleware('auth:admin',['except' => ['abrirImagenes','show']]);;
        $this->middleware('permission:list.propiedades')->only('index');
        $this->middleware('permission:create.propiedades')->only(['create','store']);
        // $this->middleware('permission:show.propiedades')->only('show');
        $this->middleware('permission:update.propiedades')->only(['edit','update']);
        $this->middleware('permission:delete.propiedades')->only('delete');
    }

    public function index($clase_inmueble = 'propiedad', $vista = null)
    {
        return parent::index($clase_inmueble = 'propiedad',  $vista = 'crm.propiedades.list'); // TODO: Change the autogenerated stub
    }

    public function show($id)
    {
        $propiedad = Propiedades::find($id);
        $recientes = Propiedades::orderBy('id', 'desc')->take(3)->get();
        return view('welcome.projects.view1',[
            'propiedad' => $propiedad,
            'recientes' => $recientes
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            
        ]);
        $url = explode('"',$request->mapa_url)[1];
        $request->request->add(['company_id','1']);
        $propiedad = Propiedades::create($request->all());

        $propiedad->mapa_url = $url;
        $propiedad->save();

        if($request->has('path')){
            if(count($request->path) > 0)
            {
                foreach( $request->path as $key => $value) {
                    $path = $request->file('path')[$key]->store('propiedades');
                    $path = $request->file('path')[$key]->store($propiedad->name .'/propiedades');

                    $archivo = ArchivosPropiedades::create([
                        'nombre_archivo' => 'archivo',
                        'propiedad_id' => $propiedad->id,
                        'ubicacion' => $path,
                        'clase_archivo' => 'galeria'
                    ]);
                }
            }
        }
        return redirect()->action('PropiedadesController@index');
    }

 
    public function edit(Propiedades $propiedades, $vista = '')
    {
        dd("Hola");
        // return parent::edit($propiedades, $vista = 'crm.propiedades.edit'); // TODO: Change the autogenerated stub
        return redirect()->action('PropiedadesController@index');
    }



    public function abrirImagenes($id)
    {
        $imagen = ArchivosPropiedades::find($id);
        $file = File::get(Storage::path($imagen->ubicacion));
        $type = File::mimeType(Storage::path($imagen->ubicacion));

        return Response::make($file, 200, [
            'Content-Type' => $type,
            'Content-Disposition' => 'inline; filename="'.$imagen->ubicacion.'"'
        ]);
    }



}
