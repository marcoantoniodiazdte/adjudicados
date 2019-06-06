<?php

namespace App\Http\Controllers;

use App\ArchivosPropiedades;
use App\AtributosPropiedades;
use App\Facades\Company;
use App\Http\Requests\PropiedadRequestForm;
use App\Municipio;
use App\Propiedades;
use App\Provincia;
use App\Sector;
use App\TiposAtributos;
use App\TiposCaracteristicas;
use App\TiposPropiedades;
use App\Traits\UploadTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Yajra\DataTables\Facades\DataTables;


class InmuebleController extends Controller
{

    use UploadTrait;

    protected $guard_name = 'admin';

    public function __construct()
    {
        $this->middleware('auth:admin');

        $this->middleware('permission:list.propiedades')->only('index');
        $this->middleware('permission:create.propiedades')->only(['create','store']);
        $this->middleware('permission:show.propiedades')->only('show');
        $this->middleware('permission:update.propiedades')->only(['edit','update']);
        $this->middleware('permission:delete.propiedades')->only('delete');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($clase_inmueble = null,$vista = null)    {



        if (\Illuminate\Support\Facades\Request::ajax()) {

            return DataTables::eloquent(Propiedades::query()->where('clase',$clase_inmueble))
                ->addColumn('edit', function($row){
                    return Auth::user()->can('update.propiedades');
                })
                ->addColumn('view', function($row){
                    return Auth::user()->can('show.propiedades');
                })
                ->rawColumns(['edit','view'])
                ->make(true);
        }
        return view($vista);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($clase_inmueble = null,$vista = null)
    {
        $tipos_atributos = TiposAtributos::all();
        $tipos_caracteristicas = TiposCaracteristicas::all();
        $provincias = Provincia::all();
        $tipos_propiedades = TiposPropiedades::all();
        return view($vista,compact(['tipos_propiedades','provincias','tipos_atributos','tipos_caracteristicas']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropiedadRequestForm $request)
    {


         $request->request->add(['slug' =>  str_slug($request->name)]);

        $propiedad = Propiedades::create($request->all());

        if($request->has('tipos_propiedad')){
            $propiedad->tiposPropiedad()->attach($request->input('tipos_propiedad'));
        }

        if($request->has('tipo_atributo')){
            foreach ($request->input('tipo_atributo') as $atributo){

                $propiedad->atributos()->create([
                    'tipo_atributo_id' => $atributo['atributo_id'],
                    'valor' => $atributo['valor'],
                ]);
            }
        }
        if($request->has('tipos_caracteristicas')){
            foreach ($request->input('tipos_caracteristicas') as $caracteristica_id){
                $propiedad->caracteristicas()->create([
                    'tipos_caracteristica_id' => $caracteristica_id
                ]);
            }
        }

        $this->guardarImagesGaleria($request, $propiedad);
        return redirect(route('propiedades.index'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
    }



    public function edit(Propiedades $propiedades, $vista = '')
    {
        $provincias = Provincia::all();
        $tipos_propiedades = TiposPropiedades::all();
        $municipio_prop = Municipio::where('municipio_id',$propiedades->municipio_id)->first();
        $sector_pro = Sector::where('sector_id',$propiedades->sector_id)->first();

        $tipos_atributos = TiposAtributos::all();
        $tipos_caracteristicas = TiposCaracteristicas::all();

        $propiedades->load(['arhivosPropiedad','atributos','caracteristicas','tiposPropiedad','provincia','municipio','sector']);



        return view($vista,compact(['propiedades','provincias','tipos_propiedades','municipio_prop','sector_pro','tipos_atributos','tipos_caracteristicas']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PropiedadRequestForm $request, Propiedades $propiedades)
    {

       $propiedades->update($request->all());
        if($request->has('tipos_propiedad')){
            $propiedades->tiposPropiedad()->sync($request->input('tipos_propiedad'));
        }
        $this->guardarImagesGaleria($request, $propiedades);

        return redirect(route('propiedades.index'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        //
    }

    /**
     * @param PropiedadRequestForm $request
     * @param $propiedad
     */
    private function guardarImagesGaleria(PropiedadRequestForm $request, $propiedad): void
    {


        if ($request->has('garleria_propiedad')) {


            $imagenes_garleria_propiedad = $request->file('garleria_propiedad');

            foreach ($imagenes_garleria_propiedad as $imagen) {

                $fecha_actual = Carbon::now()->toDateString();

                $nombre_imagen = str_slug($propiedad->name . '-' . $propiedad->id . '-' . $fecha_actual . '-' . uniqid() . '.' . $imagen->getClientOriginalExtension());

                if (!Storage::disk('public')->exists('ArchivosPropiedades/galeria')) {
                    Storage::disk('public')->makeDirectory('ArchivosPropiedades/galeria');
                }

                $carpeta = '/ArchivosPropiedades/galeria';

                $filePath = $carpeta . $nombre_imagen;


                $result = $this->uploadOne($imagen, $carpeta, 'public', $nombre_imagen);

                if ($result) {
                    $archivo_propiedad = new ArchivosPropiedades([
                            'nombre_archivo' => $nombre_imagen,
                            'ubicacion' => $result,
                            'clase_archivo' => 'galeria',
                            'propiedad_id' => $propiedad->id,
                        ]
                    );
                    $propiedad->arhivosPropiedad()->save($archivo_propiedad);
                }
            }
        }
    }
}
