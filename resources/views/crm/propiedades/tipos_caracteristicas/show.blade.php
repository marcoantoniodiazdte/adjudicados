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
            <h2><i class="material-icons">search</i>Consulta Inmobiliaria</h2>
        </div>
        <div>
            <div class="body">
                <h3>Datos Inmobiliaria</h3>
                <li>{{$inmobiliaria->name}}</li>
                <li>{{$inmobiliaria->description}}</li>

                <h3>Administrador</h3>
                <li>{{$inmobiliaria->admin->name }}</li>
                <li>{{$inmobiliaria->admin->email }}</li>



                <h3>Modulos</h3>
                @foreach($inmobiliaria->modules as $modulo)
                    <li>{{ $modulo->title }}</li>
                @endforeach




            </div>
        </div>
    </div>
@endsection



