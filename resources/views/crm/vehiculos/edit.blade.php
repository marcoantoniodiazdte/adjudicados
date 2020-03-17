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
           <h2><i class="material-icons">add</i>Editar Vehículo</h2>
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

               {!! Form::open(['route' => ['vehiculos.update', $vehiculo->id], 'method' => 'put','enctype' => 'multipart/form-data']) !!}
               <div class="row">
                   <div class="col-lg-4">
                       <div class="form-group form-float">
                            <div class="form-line focused">
                                <input type="text" class="form-control validate" value="{{$vehiculo->titulo}}" required name="titulo" required >
                                <label class="form-label">Título</label>
                            </div>
                        </div>
                   </div>
                   <div class="col-lg-2">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <select class="btn-group bootstrap-select form-control show-tick" value="{{$vehiculo->fecha_fabricacion}}" data-live-search="true" name="fecha_fabricacion" id="clase">
                                        <option value="2000" {{($vehiculo->fecha_fabricacion == 2000) ? 'selected' : ''}}>2000</option>
                                        <option value="2001" {{($vehiculo->fecha_fabricacion == 2001) ? 'selected' : ''}}>2001</option>
                                        <option value="2002" {{($vehiculo->fecha_fabricacion == 2002) ? 'selected' : ''}}>2002</option>
                                        <option value="2003" {{($vehiculo->fecha_fabricacion == 2003) ? 'selected' : ''}}>2003</option>
                                        <option value="2004" {{($vehiculo->fecha_fabricacion == 2004) ? 'selected' : ''}}>2004</option>
                                        <option value="2005" {{($vehiculo->fecha_fabricacion == 2005) ? 'selected' : ''}}>2005</option>
                                        <option value="2006" {{($vehiculo->fecha_fabricacion == 2006) ? 'selected' : ''}}>2006</option>
                                        <option value="2007" {{($vehiculo->fecha_fabricacion == 2007) ? 'selected' : ''}}>2007</option>
                                        <option value="2008" {{($vehiculo->fecha_fabricacion == 2008) ? 'selected' : ''}}>2008</option>
                                        <option value="2009" {{($vehiculo->fecha_fabricacion == 2009) ? 'selected' : ''}}>2009</option>
                                        <option value="2010" {{($vehiculo->fecha_fabricacion == 2010) ? 'selected' : ''}}>2010</option>
                                        <option value="2011" {{($vehiculo->fecha_fabricacion == 2011) ? 'selected' : ''}}>2011</option>
                                        <option value="2012" {{($vehiculo->fecha_fabricacion == 2012) ? 'selected' : ''}}>2012</option>
                                        <option value="2013" {{($vehiculo->fecha_fabricacion == 2013) ? 'selected' : ''}}>2013</option>
                                        <option value="2014" {{($vehiculo->fecha_fabricacion == 2014) ? 'selected' : ''}} >2014</option>
                                        <option value="2015" {{($vehiculo->fecha_fabricacion == 2015) ? 'selected' : ''}}>2015</option>
                                        <option value="2016" {{($vehiculo->fecha_fabricacion == 2016) ? 'selected' : ''}}>2016</option>
                                        <option value="2017" {{($vehiculo->fecha_fabricacion == 2017) ? 'selected' : ''}}>2017</option>
                                        <option value="2018" {{($vehiculo->fecha_fabricacion == 2018) ? 'selected' : ''}}>2018</option>
                                        <option value="2019" {{($vehiculo->fecha_fabricacion == 2019) ? 'selected' : ''}}>2019</option>
                                        <option value="2020" {{($vehiculo->fecha_fabricacion == 2020) ? 'selected' : ''}}>2020</option>
                                </select>
                                <label class="form-label m-t--5">Año</label>
                            </div>
                        </div>
                    </div>
                   <div class="col-lg-2">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <select class="btn-group bootstrap-select form-control show-tick" data-live-search="true" name="marca_id" id="clase">
                                    @foreach($marcas as $marca)
                                        <option value="{{$marca->id}}" {{($vehiculo->marca_id == $marca->id) ? 'selected' : ''}}  >{{$marca->nombre}}</option>
                                    @endforeach
                                </select>
                                <label class="form-label m-t--5">Marca</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-3">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <select class="btn-group bootstrap-select form-control show-tick" required data-live-search="true" name="tipo_oferta" id="clase">
                                    <option value="normal" {{($vehiculo->tipo_oferta == 'normal') ? 'selected' : ''}} >Sin Oferta</option>
                                    <option value="exclusiva" {{($vehiculo->tipo_oferta == 'exclusiva') ? 'selected' : ''}}>Exclusiva</option>
                                </select>
                                <label class="form-label m-t--5">Tipo Oferta</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group form-float ">
                            <div class="form-line focused">
                                <input type="text" class="form-control validate" value="{{$vehiculo->precio}}" required name="precio" required >
                                <label class="form-label">Precio</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group form-float ">
                            <div class="form-line focused">
                                <input type="text" class="form-control validate" value="{{$vehiculo->precio_usd}}" name="precio_usd" required >
                                <label class="form-label">Precio USD</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group form-float ">
                            <div class="form-line focused">
                                <input type="text" class="form-control validate" value="{{$vehiculo->precio_eu}}" name="precio_eu" required >
                                <label class="form-label">Precio EU</label>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <input type="text" class="form-control validate" value="{{$vehiculo->precio_oferta}}" required name="precio_oferta" required >
                                <label class="form-label">Precio Oferta RD</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <input type="text" class="form-control validate" value="{{$vehiculo->precio_oferta_usd}}" required name="precio_oferta_usd" required >
                                <label class="form-label">Precio Oferta USD</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <input type="text" class="form-control validate" required value="{{$vehiculo->precio_oferta_eu}}" name="precio_oferta_eu" required >
                                <label class="form-label">Precio Oferta EU</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <input type="text" class="form-control validate" value="{{$vehiculo->descripcion}}" required name="descripcion" required >
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
                @foreach($vehiculo->archivos as $path)
                    "{{'/vehiculo/abrirImagen/'. $path['id']}}",
                @endforeach
            ],
            initialPreviewConfig: [
                @foreach($vehiculo->archivos as $path)
                    {url: "{{'/vehiculo/eliminarImagen/'. $path['id']}}" },
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
