@extends('crm.layouts.base_crm')

@section('title', 'Proyecto')

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
           <h2><i class="material-icons">add</i>Crear Propiedad</h2>
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



              {{-- {!! Form::open(['route' => 'propiedades.store', 'method' => 'post']) !!}--}}
           <form method="POST" id="inmueble_new_form" enctype="multipart/form-data" action="{{ route('propiedades.store') }}">

               @csrf

               @include('crm.inmuebles.partials._form_inmueble',['clase_proyecto' => 'proyecto'])

               {{--{!! Form::close() !!}--}}
           </form>



       </div>

   </div>
@endsection

@section('pages_css_files')

    <link href="{{ asset('plugins/jquery-select2/css/select2.min.css') }}" rel="stylesheet">

@stop


@section('pages_js_files')

    <script src="{{ asset('plugins/jquery-select2/js/select2.min.js') }}"></script>
    </script><script src="{{ asset('js/src/proyectos.js') }}"></script>
    <script>

    </script>

@stop
