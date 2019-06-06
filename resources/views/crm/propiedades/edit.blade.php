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
            <h2><i class="material-icons">add</i>Editar Propiedad</h2>
        </div>
            <div class="body">



                {!! Form::open(['route' => ['propiedades.update',$propiedades->slug], 'method' => 'PATCH','id' => 'inmueble_form','enctype' => 'multipart/form-data']) !!}

                    <div class="row m-t-10">

                        <div class="col-sm-4 col-md-6 col-lg-6">
                            <div class="form-group form-float m-b-0">
                                <div class="form-line focused">
                                    <input type="text" class="form-control m-t-5 " name="name"  value="{{  $propiedades ->name}}" maxlength="100" />
                                    <input type="hidden" class="form-control " name="clase" value="propiedad"  maxlength="100" />
                                    <label class="form-label m-t--5">Nombre</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-3">
                            <div class="form-group form-float">
                                <div class="form-line focused">
                                    <select  class="form-control  btn-group bootstrap-select show-tick m-t-5" data-live-search="true"   value="{{  old('estado') }}"
                                             name="estado" id="estado">
                                        <option value="" disabled>Elija Una Opción</option>
                                        <option value="disponible" {{  $propiedades->estado === 'disponible' ? 'selected': ''}} >Disponible</option>
                                        <option value="construccion" {{  $propiedades->estado === 'construccion' ? 'selected': ''}}>Construcción</option>
                                        <option value="contrato" {{  $propiedades->estado === 'contrato' ? 'selected': ''}}>Contrato</option>
                                        <option value="vendida" {{  $propiedades->estado === 'vendida' ? 'selected': ''}}>Vendido</option>
                                    </select>
                                    <label class="form-label m-t--5">Estado</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-3">
                            <div class="form-group form-float">
                                <div class="form-line focused">
                                    <select class="btn-group bootstrap-select form-control show-tick m-t-5"
                                            data-live-search="true" name="estado_comercial" id="clase">
                                        <option value="" disabled>Elija Una Opción</option>
                                        <option value="venta" {{  $propiedades->estado_comercial === 'venta' ? 'selected': ''}} >Venta</option>
                                        <option value="alquiler {{  $propiedades->estado_comercial === 'alquiler' ? 'selected': ''}} ">Alquiler</option>
                                    </select>
                                    <label class="form-label m-t--5">Estado Comercial</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-3">
                            <div class="form-group form-float m-b-0  m-t-5">
                                <div class="form-line focused">
                                    <input type="number" class="form-control text-right" name="precio_us" value="{{  $propiedades->precio_us}}" maxlength="100" min="100" />
                                    <label class="form-label  m-t--5">Precio USD</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-3">
                            <div class="form-group form-float m-b-0  m-t-5">
                                <div class="form-line focused" >
                                    <input type="number" class="form-control text-right" name="precio_rd" value="{{  $propiedades->precio_rd}}" min="100"  maxlength="100" />
                                    <label class="form-label  m-t--5">Precio DOP</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-3">
                            <div class="form-group form-float">
                                <div class="form-line focused">
                                    <select class="btn-group bootstrap-select form-control show-tick"
                                            data-live-search="true" name="mostrar_precio" id="clase">
                                        <option value="us" {{  $propiedades->mostrar_precio === 'ud' ? 'selected': ''}}>USD</option>
                                        <option value="do" {{  $propiedades->mostrar_precio === 'do' ? 'selected': ''}}>DOP</option>
                                    </select>
                                    <label class="form-label m-t--5">Precio a Mostrar</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-sm-4 col-md-4 col-lg-3">
                            <div class="form-group form-float">
                                <div class="form-line focused">
                                    <select class="btn-group bootstrap-select form-control show-tick" data-live-search="true" name="tipo_oferta" id="clase">
                                        <option value="exclusiva" {{  $propiedades->tipo_oferta === 'exclusiva' ? 'selected': ''}} >Exclusiva</option>
                                        <option value="normal"  {{  $propiedades->tipo_oferta === 'normal' ? 'selected': ''}} >Normal</option>
                                    </select>
                                    <label class="form-label m-t--5">Tipo Oferta</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-3">
                            <div class="form-group form-float">
                                <div class="form-line focused">
                                    <select class="btn-group bootstrap-select form-control show-tick" data-live-search="true"  id="clase">
                                        <option value="proyecto" {{  $propiedades->tipo_oferta === 'exclusiva' ? 'selected': ''}}>Exclusiva</option>
                                        <option value="propiedad" {{  $propiedades->tipo_oferta === 'exclusiva' ? 'selected': ''}}>Propiedad</option>
                                    </select>
                                    <label class="form-label m-t--5">Nombre Plantillarta</label>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-3">
                            <div class="form-group form-float">
                                <div class="form-line focused">
                                    <select class="btn-group bootstrap-select form-control show-tick" data-live-search="true"  id="clase" name="estado_publicacion">
                                        <option value="activo" {{  $propiedades->estado_publicacion === 'activo' ? 'selected': ''}}>Activo</option>
                                        <option value="inactivo" {{  $propiedades->estado_publicacion === 'inactivo' ? 'selected': ''}}>Inactivo</option>
                                    </select>
                                    <label class="form-label m-t--5">Estado Publicacion</label>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-12 col-lg-12">
                            <div class="form-group form-float m-b-15">
                                <div class="form-line focused">
                                    <input type="text" class="form-control" name="descripcion" value="{{ $propiedades->descripcion }}"  maxlength="100" />
                                    <label class="form-label">Descripción</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row ">

                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group form-float m-b-0 ">
                                <div class="form-line focused">
                                    <select class="btn-group bootstrap-select form-control show-tick" data-live-search="true" name="provincia_id" id="provincia_id">
                                        <option value="" disabled>Elija Una Opción</option>
                                        @foreach($provincias as $provincia)
                                            <option value="{{ $provincia->provincia_id }}" {{  $propiedades->provincia_id === $provincia->provincia_id ? 'selected': ''}}>{{ Str::upper($provincia->provincia) }}</option>
                                        @endforeach
                                    </select>
                                    <label class="form-label m-t--5">Provincia</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group form-float m-b-0 ">
                                <div class="form-line focused">

                                    <select class="btn-group bootstrap-select form-control show-tick" data-live-search="true" name="municipio_id" id="municipio_id">
                                        <option value="{{$municipio_prop->municipio_id }}">{{$municipio_prop->municipio}}</option>
                                    </select>

                                    <label class="form-label m-t--5">Municipio</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <div class="form-group form-float m-b-0 ">
                                <div class="form-line focused">

                                    <select class="btn-group bootstrap-select form-control show-tick" data-live-search="true" name="sector_id" id="sector_id">
                                        <option value="{{$sector_pro->sector_id }}">{{$sector_pro->sector}}</option>
                                    </select>

                                    <label class="form-label m-t--5">Sector</label>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-4 col-md-12 col-lg-12">
                            <div class="form-group form-float m-b-0">
                                <div class="form-line focused">
                                    <input type="text" class="form-control" name="direccion" value="{{ $propiedades->direccion }}"  maxlength="100" />
                                    <label class="form-label">Dirección</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-8 col-md-12">
                            <h2 class="card-inside-title">Tipo Propiedad</h2>
                            <div class="demo-checkbox">
                                @foreach($tipos_propiedades as $tipo_propiedad)
                                    <input  type="checkbox" name="tipos_propiedad[]" id="{{ $tipo_propiedad->id }}"
                                            value="{{ $tipo_propiedad->id }}" {{ $propiedades->tiposPropiedad->contains($tipo_propiedad->id) ?  'checked' : ''  }}/>
                                    <label for="{{ $tipo_propiedad->id }}"  >{{ $tipo_propiedad->name }}</label>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12">
                            <h2 class="card-inside-title">Comodidades</h2>
                            <div class="demo-checkbox">

                                @foreach($tipos_caracteristicas as $caracteristicas)
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <div class="form-group form-float m-b-0">
                                            <input  type="checkbox" name="tipos_caracteristicas[]" id="{{ $caracteristicas->nombre_tipo . $caracteristicas->id }}" value="{{ $caracteristicas->id }}"/>
                                            <label for="{{ $caracteristicas->nombre_tipo . $caracteristicas->id  }}">{{ $caracteristicas->nombre_tipo }}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                @include('crm.inmuebles.partials.atributos_pro')
                {{$propiedades->atributos}}
                <span id="propiedades_atributos" data-atributos="@json($propiedades->atributos)" ></span>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">

                           <div class="body">
                               <h2 class="card-inside-title">Galeria Propiedad</h2>
                               <div class="gallery-box" id="gallerybox">
                                   @foreach($propiedades->arhivosPropiedad as $imagen_galeria)
                                       <div class="gallery-image-edit" id="gallery-{{$imagen_galeria->id}}">
                                           <button type="button" data-id="{{$imagen_galeria->id}}" class="btn btn-danger btn-sm"><i class="material-icons">delete_forever</i></button>
                                           <img class="img-responsive" src="{{Storage::url($imagen_galeria->ubicacion)}}" alt="{{$imagen_galeria->nombre_archivo}}">
                                       </div>
                                   @endforeach
                               </div>
                               <div class="gallery-box">
                                   <hr>
                                   <input type="file" name="garleria_propiedad[]" value="UPLOAD" id="gallaryimageupload" multiple>
                                   <button type="button" class="btn btn-info btn-lg right" id="galleryuploadbutton">Cargar Nuevas Imagenes</button>
                               </div>
                           </div>
                        </div>

                   </div>


                    <div class="row">

                        <div class="col-xs-12 align-center">
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Actualizar Propiedad</button>
                        </div>

                    </div>

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
        // DELETE PROPERTY GALLERY IMAGE
        $('.gallery-image-edit button').on('click',function(e){
            e.preventDefault();
            var id = $(this).data('id');
            var image = $('#gallery-'+id+' img').attr('alt');
            $.post("/",{id:id,image:image},function(data){
                if(data.msg == true){
                    $('#gallery-'+id).remove();
                }
            });
        });

        $(function() {
            // Multiple images preview in browser
            var imagesPreview = function(input, placeToInsertImagePreview) {

                if (input.files) {
                    var filesAmount = input.files.length;

                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function(event) {

                            $('<div class="gallery-image-edit" id="gallery-perview-'+i+'"><img src="'+event.target.result+'" height="106" width="173"/></div>').appendTo(placeToInsertImagePreview);
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }

            };

            $('#gallaryimageupload').on('change', function() {
                imagesPreview(this, 'div#gallerybox');
            });
        });

        $(document).on('click','#galleryuploadbutton',function(e){
            e.preventDefault();
            $('#gallaryimageupload').click();
        })
        
    </script>



@stop

