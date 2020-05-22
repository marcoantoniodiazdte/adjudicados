@extends('crm.layouts.base_crm')

@section('title', 'Inmobiliaria')

@section('navbar_content')
    @include('crm.layouts.components.navbar')
@endsection


@section('left_sidebar_navbar_content')
    @include('crm.layouts.components.left_sidebar')
@endsection


@section('contenido_inmobiliaria')
   <div class="card">
       <div class="header">
           <h2><i class="material-icons">add</i>Crear Contacto</h2>
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

               {!! Form::open(['route' => 'contactos.store', 'method' => 'post' , 'id' => 'inmueble_form','enctype' => 'multipart/form-data']) !!}
               @csrf
               <div class="row">
                   <div class="col-lg-4">
                       <div class="form-group form-float">
                            <div class="form-line focused">
                                <input type="text" class="form-control validate" name="nombre" required >
                                <label class="form-label">Nombre</label>
                            </div>
                        </div>
                   </div>


                    <div class="col-lg-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <input type="text" class="form-control validate" name="telefono" required >
                                <label class="form-label">Teléfono</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <input type="text" class="form-control validate" name="celular"  >
                                <label class="form-label">Celular</label>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <input type="text" class="form-control validate" name="correo"  >
                                <label class="form-label">Correo Electrónico</label>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-sm-4 col-md-3 col-lg-3">
                        <div class="form-group form-float m-b-0  m-t-5">
                            <div class="form-line focused">
                                <select class="btn-group bootstrap-select form-control show-tick" required data-live-search="true" name="inmobiliaria_id" >
                                    @foreach($inmobiliarias as $inmobiliaria)
                                        <option value="{{$inmobiliaria->id}}">{{$inmobiliaria->nombre}}</option>
                                    @endforeach
                                </select>
                                <label class="form-label m-t--5">Inmobiliaria</label>
                            </div>
                        </div>
                    </div>

                    
               </div>

               <div class="row">
                    <div class="col-xs-12 align-center">
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Guardar</button>
                    </div>
               </div>

               {!! Form::close() !!}



       </div>

   </div>
@endsection

@section('pages_css_files')
    <link href="{{ asset('plugins/bootstrap-fileinput/css/fileinput.min.css') }}" media="all" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/materialize-stepper/css/mstepper.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/multi-select/css/multi-select.css') }}" rel="stylesheet">

    <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/select2/css/select2-bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('plugins/bootstrap-fileinput/css/fileinput.min.css') }}" media="all" rel="stylesheet" type="text/css">

@stop



@section('pages_js_files')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/fileinput.min.js"></script>
    <script src="{{ asset('plugins/bootstrap-fileinput/js/fileinput.js') }}"></script>
    <script src="{{ asset('plugins/tinymce/tinymce.js') }}"></script>
    <script src="{{ asset('plugins/jquery-select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-sheepIt/jquery.sheepItPlugin.js') }}"></script>
    <script src="{{ asset('plugins/jquery-maskMoney/jquery.maskMoney.js') }}"></script>
    <script src="{{ asset('plugins/jquery-maskMoney/jquery.region.maskMoney.js') }}"></script>
    <script src="{{ asset('plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>

    <script src="{{ asset('plugins/autosize/autosize.js') }}"></script>
    <script>
        $(document).on('ready', function() {
            $("#garleria_propiedad").fileinput({'showUpload':false, 'previewFileType':'jpeg,jpg,png'});

            tinymce.init({
                selector: '#nota'
            });
        });
    </script>

@stop
