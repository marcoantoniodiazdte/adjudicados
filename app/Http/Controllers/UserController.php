<?php

namespace App\Http\Controllers;
use App\Vehiculo;
use App\Propiedades;
use App\Obra;
use App\Equipo;
use App\ProyectoFinanciado;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function favoritos () {
        $favoritos = [];
        $vehiculos = \Auth::user()->vehiculos;
        $propiedades = \Auth::user()->propiedades;
        $proyectos = \Auth::user()->proyectos;
        $obras = \Auth::user()->obras;
        $equipos = \Auth::user()->equipos;

        foreach($vehiculos as $vehiculo)
        {
            $auto = Vehiculo::find($vehiculo->anuncio_id);
            $img_id = $auto->archivos[0]->id;
            $veh = [
                'titulo' => $auto->titulo,
                'precio' => $vehiculo->monto,
                'tipo' => $vehiculo->tipo,
                'fecha' => $vehiculo->fecha,
                'precio_original' => $auto->monto,
                'moneda' => $auto->moneda,
                'precio_oferta' => $auto->precio_oferta,
                'estado' => $vehiculo->estado,
                'oferta' => $auto->isOffer(),
                'id' => $auto->id,
                'src' => "/vehiculo/abrirImagen/$img_id"
            ];
            $favoritos[] = $veh;
        }
        foreach($propiedades as $propiedad)
        {
            $prop = Propiedades::find($propiedad->anuncio_id);
            $img_id = $prop->archivos[0]->id;
            $veh = [
                'titulo' => $prop->name,
                'precio' => $propiedad->monto || 0,
                'tipo' => $propiedad->tipo,
                'fecha' => $propiedad->fecha,
                'precio_original' => $prop->monto,
                'moneda' => $prop->moneda,
                'precio_oferta' => $prop->precio_oferta_rd,
                'estado' => $propiedad->estado,
                'oferta' => $prop->isOffer(),
                'id' => $prop->id,
                'src' => "/abrirImagen/$img_id"
            ];
            $favoritos[] = $veh;
        }

        foreach($proyectos as $proyecto)
        {
            $prop = ProyectoFinanciado::find($proyecto->anuncio_id);
            $img_id = $prop->archivos[0]->id;
            $veh = [
                'titulo' => $prop->name,
                'precio' => $proyecto->monto || 0,
                'tipo' => $proyecto->tipo,
                'fecha' => $proyecto->fecha,
                'precio_original' => $prop->monto,
                'moneda' => $prop->moneda,
                'precio_oferta' => $prop->precio_oferta_rd,
                'estado' => $proyecto->estado,
                'oferta' => $prop->isOffer(),
                'id' => $prop->id,
                'src' => "/proyecto/abrirImagen/$img_id"
            ];
            $favoritos[] = $veh;
        }

        foreach($obras as $obra)
        {
            $obr = Obra::find($obra->anuncio_id);
            $img_id = $obr->archivos[0]->id;
            $veh = [
                'titulo' => $obr->titulo,
                'precio' => $obra->monto || 0,
                'tipo' => $obra->tipo,
                'fecha' => $obra->fecha,
                'precio_original' => $obr->monto,
                'moneda' => $obr->moneda,
                'precio_oferta' => $obr->precio_oferta,
                'estado' => $obra->estado,
                'oferta' => $obr->isOffer(),
                'id' => $obr->id,
                'src' => "/obra/abrirImagen/$img_id"
            ];
            $favoritos[] = $veh;
        }

        foreach($equipos as $equipo)
        {
            $equi = equipo::find($equipo->anuncio_id);
            $img_id = $equi->archivos[0]->id;
            $veh = [
                'titulo' => $equi->titulo,
                'precio' => $equipo->monto || 0,
                'tipo' => $equipo->tipo,
                'fecha' => $equipo->fecha,
                'precio_original' => $equi->monto,
                'moneda' => $equi->moneda,
                'precio_oferta' => $equi->precio_oferta,
                'estado' => $equipo->estado,
                'oferta' => $equi->isOffer(),
                'id' => $equi->id,
                'src' => "/equipo/abrirImagen/$img_id"
            ];
            $favoritos[] = $veh;
        }

        return view('welcome.profile.favorities',[
            'favoritos' => $favoritos
        ]);
    }


    public function ofertas () {
        $ofertas = [];
        $vehiculos = \Auth::user()->vehiculos_oferta;
        $propiedades = \Auth::user()->propiedades_oferta;
        $proyectos = \Auth::user()->proyectos_oferta;
        $obras = \Auth::user()->obras_oferta;
        $equipos = \Auth::user()->equipos_oferta;

        foreach($vehiculos as $vehiculo)
        {
            $auto = Vehiculo::find($vehiculo->anuncio_id);
            $img_id = $auto->archivos[0]->id;
            $obj = [
                'titulo' => $auto->titulo,
                'precio' => $vehiculo->monto,
                'tipo' => $vehiculo->tipo,
                'fecha' => $vehiculo->fecha,
                'precio_original' => $auto->monto,
                'moneda' => $auto->moneda,
                'precio_oferta' => $auto->precio_oferta,
                'estado' => $vehiculo->estado,
                'oportunidad' => $auto->offer->id,
                'favorito' => $auto->isFavorite(),
                'id' => $auto->id,
                'src' => "/vehiculo/abrirImagen/$img_id"
            ];
            $ofertas[] = $obj;
        }

        foreach($propiedades as $propiedad)
        {
            $prop = Propiedades::find($propiedad->anuncio_id);
            $img_id = $prop->archivos[0]->id;
            $obj = [
                'titulo' => $prop->name,
                'precio' => $propiedad->monto,
                'tipo' => $propiedad->tipo,
                'fecha' => $propiedad->fecha,
                'precio_original' => $prop->monto,
                'moneda' => $prop->moneda,
                'precio_oferta' => $prop->precio_oferta_rd,
                'estado' => $propiedad->estado,
                'oportunidad' => $prop->offer->id,
                'favorito' => $prop->isFavorite(),
                'id' => $prop->id,
                'src' => "/abrirImagen/$img_id"
            ];
            $ofertas[] = $obj;
        }


        foreach($proyectos as $proyecto)
        {
            $prop = ProyectoFinanciado::find($proyecto->anuncio_id);
            $img_id = $prop->archivos[0]->id;
            $obj = [
                'titulo' => $prop->name,
                'precio' => $proyecto->monto,
                'tipo' => $proyecto->tipo,
                'fecha' => $proyecto->fecha,
                'precio_original' => $prop->monto,
                'moneda' => $prop->moneda,
                'precio_oferta' => $prop->precio_oferta_rd,
                'estado' => $proyecto->estado,
                'oportunidad' => $prop->offer->id,
                'favorito' => $prop->isFavorite(),
                'id' => $prop->id,
                'src' => "/proyecto/abrirImagen/$img_id"
            ];
            $ofertas[] = $obj;
        }


    


        foreach($obras as $obra)
        {
            $obr = Obra::find($obra->anuncio_id);
            $img_id = $obr->archivos[0]->id;
            $obj = [
                'titulo' => $obr->titulo,
                'precio' => $obra->monto,
                'tipo' => $obra->tipo,
                'fecha' => $obra->fecha,
                'precio_original' => $obr->monto,
                'moneda' => $obr->moneda,
                'precio_oferta' => $obr->precio_oferta,
                'estado' => $obra->estado,
                'oportunidad' => $obr->offer->id,
                'favorito' => $obr->isFavorite(),
                'id' => $obr->id,
                'src' => "/obra/abrirImagen/$img_id"
            ];
            $ofertas[] = $obj;
        }


        foreach($equipos as $equipo)
        {
            $equi = Equipo::find($equipo->anuncio_id);
            $img_id = $equi->archivos[0]->id;
            $obj = [
                'titulo' => $equi->titulo,
                'precio' => $equipo->monto,
                'tipo' => $equipo->tipo,
                'fecha' => $equipo->fecha,
                'precio_original' => $equi->monto,
                'moneda' => $equi->moneda,
                'precio_oferta' => $equi->precio_oferta,
                'estado' => $equipo->estado,
                'oportunidad' => $equi->offer->id,
                'favorito' => $equi->isFavorite(),
                'id' => $equi->id,
                'src' => "/equipo/abrirImagen/$img_id"
            ];
            $ofertas[] = $obj;
        }

        $related = collect($ofertas)->sortBy('oportunidad')->all();


        return view('welcome.profile.properties',[
            'ofertas' => array_reverse($related, true)
        ]);
    }
}
