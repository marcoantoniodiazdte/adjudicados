@extends('crm.layouts.base_crm')

@section('title', 'Propiedad')

@section('navbar_content')
    @include('crm.layouts.components.navbar')
@endsection


@section('left_sidebar_navbar_content')
    @include('crm.layouts.components.left_sidebar')
@endsection


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

               {!! Form::open(['route' => 'propiedades.store', 'method' => 'post' , 'id' => 'inmueble_form','enctype' => 'multipart/form-data']) !!}

                    @include('crm.inmuebles.partials._form_inmueble',['clase_proyecto' => 'propiedad'])

               {!! Form::close() !!}



       </div>

   </div>
@endsection

@section('pages_css_files')
    <link href="{{ asset('plugins/materialize-stepper/css/mstepper.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/multi-select/css/multi-select.css') }}" rel="stylesheet">

    <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/select2/css/select2-bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('plugins/bootstrap-fileinput/css/fileinput.min.css') }}" media="all" rel="stylesheet" type="text/css">

@stop



@section('pages_js_files')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/fileinput.min.js"></script>

    <script src="{{ asset('plugins/jquery-select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-sheepIt/jquery.sheepItPlugin.js') }}"></script>
    <script src="{{ asset('plugins/jquery-maskMoney/jquery.maskMoney.js') }}"></script>
    <script src="{{ asset('plugins/jquery-maskMoney/jquery.region.maskMoney.js') }}"></script>
    <script src="{{ asset('plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>

    <script src="{{ asset('plugins/autosize/autosize.js') }}"></script>
    </script><script src="{{ asset('js/src/proyectos.js') }}"></script>
    </script><script src="{{ asset('js/src/inmueble.js') }}"></script>
    <script>
        $(document).on('ready', function() {
            $("#garleria_propiedad").fileinput({'showUpload':false, 'previewFileType':'jpeg,jpg,png'});
        });
    </script>

@stop
