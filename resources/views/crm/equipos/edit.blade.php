@extends('crm.layouts.base_crm')

@section('title', 'Vehiculos')

@section('navbar_content')
    @include('crm.layouts.components.navbar')
@endsection


@section('left_sidebar_navbar_content')
    @include('crm.layouts.components.left_sidebar')
@endsection


@section('contenido_inmobiliaria')
   <div class="card">
       <div class="header">
           <h2><i class="material-icons">add</i>Editar Equipos</h2>
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

               {!! Form::open(['route' => ['equipos.update',$equipo->id] ,'enctype' => 'multipart/form-data']) !!}
               @method('PUT')
               @csrf
               <div class="row">
                   <div class="col-lg-4">
                       <div class="form-group form-float">
                            <div class="form-line focused">
                            <input type="text" class="form-control validate" value="{{$equipo->titulo}}" required name="titulo" required >
                                <label class="form-label">Nombre</label>
                            </div>
                        </div>
                   </div>
                   {{-- <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <select class="btn-group bootstrap-select form-control show-tick" data-live-search="true" name="tipo_id" id="clase">
                                    @foreach($tipos as $tipo)
                                        <option value="{{$tipo->id}}" {{($equipo->tipo_id == $tipo->id) ? 'selected': ''}}>{{$tipo->nombre}}</option>
                                    @endforeach
                                </select>
                                <label class="form-label m-t--5">Tipo Oferta</label>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <select class="btn-group bootstrap-select form-control show-tick" required data-live-search="true" name="tipo_id" id="clase">
                                    @foreach($tipos as $tipo)
                                        <option value="{{$tipo->id}}" {{($equipo->tipo_id == $tipo->id) ? 'selected': ''}} >{{$tipo->nombre}}</option>
                                    @endforeach
                                </select>
                                <label class="form-label m-t--5">Tipo de Equipo</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <select class="btn-group bootstrap-select form-control show-tick" required data-live-search="true" name="tipo_oferta" id="clase">
                                    <option value="exclusiva" {{($equipo->tipo_oferta == 'exclusiva') ? 'selected': ''}}>Exclusiva</option>
                                    <option value="normal" {{($equipo->tipo_oferta == 'normal') ? 'selected': ''}}>Sin Oferta</option>
                                </select>
                                <label class="form-label m-t--5">Tipo de Equipo</label>
                            </div>
                        </div>
                    </div>
                   <div class="col-lg-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <input type="number" class="form-control validate" value="{{$equipo->precio}}" required name="precio" required >
                                <label class="form-label">Precio</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <input type="number" class="form-control validate" value="{{$equipo->precio}}" required name="precio_usd" required >
                                <label class="form-label">Precio USD</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <input type="number" class="form-control validate" value="{{$equipo->precio}}" required name="precio_eu">
                                <label class="form-label">Precio EU</label>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-lg-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <input type="number" class="form-control validate" value="{{$equipo->precio_oferta}}" required name="precio_oferta" required >
                                <label class="form-label">Precio Oferta</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <input type="number" class="form-control validate" value="{{$equipo->precio_oferta_usd}}" required name="precio_oferta_usd" required >
                                <label class="form-label">Precio Oferta USD</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <input type="number" class="form-control validate" value="{{$equipo->precio_oferta_eu}}" required name="precio_oferta_eu" required >
                                <label class="form-label">Precio Oferta EU</label>
                            </div>
                        </div>
                    </div>
         
                    <div class="col-lg-8">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <input type="text" class="form-control validate" value="{{$equipo->descripcion}}" required name="descripcion" required >
                                <label class="form-label">Descripción</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="file-loading">
                            <input id="archivos_salones"  name="path[]" class="file" type="file" data-preview-file-type="text"
                                accept=".png,.jpg,.jpeg,.pdf" multiple>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 align-center">
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Guardar</button>
                        </div>
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
    <script src="{{ asset('plugins/jquery-select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-sheepIt/jquery.sheepItPlugin.js') }}"></script>
    <script src="{{ asset('plugins/jquery-maskMoney/jquery.maskMoney.js') }}"></script>
    <script src="{{ asset('plugins/jquery-maskMoney/jquery.region.maskMoney.js') }}"></script>
    <script src="{{ asset('plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>

    <script src="{{ asset('plugins/autosize/autosize.js') }}"></script>
    <script>
        $(document).on('ready', function() {
            $("#garleria_propiedad").fileinput({'showUpload':false, 'previewFileType':'jpeg,jpg,png'});
        });
        $("#archivos_salones").fileinput({
            language : 'es',
            showUpload : true,
            showDelete:false,
            allowedFileType : ['image'],
            allowedFileExtensions : ['jpg','jpeg','png'],
            autoOrientImage : false,
            showCaption : true,
            dropZoneEnabled : true,
            overwriteInitial: false,
            initialPreview: [
                @foreach($equipo->archivos as $path)
                    "{{'/equipo/abrirImagen/'. $path['id']}}",
                @endforeach
            ],
            initialPreviewConfig: [
                @foreach($equipo->archivos as $path)
                    {url: "{{'/equipo/eliminarImagen/'. $path['id']}}" },
                @endforeach
            ],
            fileActionSettings: {
                showDrag: false,
                showZoom: true,
                showUpload: false,
                showDelete: false,
            },
            initialPreviewAsData: true,
            initialPreviewFileType: 'image',
            maxFileSize : 100000,
        });
    </script>

@stop
