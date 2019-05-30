@extends('crm.layouts.base_crm')

@section('title', 'Propiedad')

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
           <h2><i class="material-icons">add</i>Crear Tipo Caracteristica</h2>
       </div>

       @if ($errors->any())
           <div class="alert alert-danger alert-dismissible fade in" role="alert">
               <ul>
                   @foreach ($errors->all() as $error)

                       <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
       @endif



       <div class="body">
           <div class="row">


               {!! Form::open(['route' => 'tipos_caracteristicas.store', 'method' => 'post']) !!}
               <div class="col-sm-8 col-md-12">
                   <div class="form-group form-float m-b-0">
                       <div class="form-line">
                           <input type="text" class="form-control" name="nombre_tipo"  maxlength="100" />
                           <label class="form-label">Nombre Tipo</label>
                       </div>
                   </div>
               </div>


               <div class="col-xs-12 align-center">
                   <button type="submit" class="btn btn-primary m-t-15 waves-effect">Crear Tipo Caracteristica</button>
               </div>

               {!! Form::close() !!}
           </div>


       </div>

   </div>
@endsection

@section('pages_js_files')


@stop
