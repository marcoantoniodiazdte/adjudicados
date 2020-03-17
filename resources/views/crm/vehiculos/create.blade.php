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
           <h2><i class="material-icons">add</i>Crear Vehículo</h2>
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

               {!! Form::open(['route' => 'vehiculos.store', 'method' => 'post','enctype' => 'multipart/form-data']) !!}
               <div class="row">
                   <div class="col-lg-4">
                       <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control validate" required name="titulo" required >
                                <label class="form-label">Título</label>
                            </div>
                        </div>
                   </div>
                   <div class="col-lg-2">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <select class="btn-group bootstrap-select form-control show-tick"  required data-live-search="true" name="fecha_fabricacion" id="clase">
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                </select>
                                <label class="form-label m-t--5">Año</label>
                            </div>
                        </div>
                    </div>
                   <div class="col-lg-3">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <select class="btn-group bootstrap-select form-control show-tick" required data-live-search="true" name="marca_id" id="clase">
                                    @foreach($marcas as $marca)
                                        <option value="{{$marca->id}}">{{$marca->nombre}}</option>
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
                                    <option value="normal">Sin Oferta</option>
                                    <option value="exclusiva">Exclusiva</option>
                                </select>
                                <label class="form-label m-t--5">Tipo Oferta</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control validate" required name="precio" required >
                                <label class="form-label">Precio RD</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control validate" required name="precio_usd" required >
                                <label class="form-label">Precio USD</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control validate" required name="precio_eu" required >
                                <label class="form-label">Precio EU</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control validate" required name="precio_oferta" required >
                                <label class="form-label">Precio Oferta RD</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control validate" required name="precio_oferta_usd" required >
                                <label class="form-label">Precio Oferta USD</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control validate" required name="precio_eu" required >
                                <label class="form-label">Precio Oferta EU</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control validate" required name="descripcion" required >
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
    </script>

@stop
