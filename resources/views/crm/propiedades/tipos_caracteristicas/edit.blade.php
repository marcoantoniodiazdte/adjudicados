@extends('crm.layouts.base_crm')

@section('title', 'Inmobiliaria')

@section('navbar_content')
    @include('crm.layouts.components.navbar')
@endsection


@section('left_sidebar_navbar_content')
    @include('crm.layouts.components.left_sidebar')
@endsection

@section('pages_css_files')
    <link href="{{ asset('plugins/materialize-stepper/css/mstepper.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/multi-select/css/multi-select.css') }}" rel="stylesheet">
@stop


@section('contenido_inmobiliaria')
    <div class="card">
        <div class="header">
            <h2><i class="material-icons">add</i>Editar Inmobiliaria</h2>
        </div>

        <div class="body">
            <div class="row">


                {!! Form::open(['route' => ['tipos_caracteristicas.update',$tipos_caracteristica->id], 'method' => 'PATCH','class' =>'validate']) !!}
                    <div class="col-sm-8 col-md-12">
                        <div class="form-group form-float m-b-0 {{ $errors->has('nombre_tipo') ? 'has-errores' : '' }} ">
                            <div class="form-line focused">

                                <input type="text" class="form-control" name="nombre_tipo" value="{{$tipos_caracteristica->nombre_tipo}}"  maxlength="100" />
                                <label class="form-label">Nombre Tipo</label>
                            </div>
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </div>
                    </div>




                    <div class="col-xs-12 align-center">
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Actualizar Tipo Caracteristica</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>


    </div>
    </div>
@endsection





