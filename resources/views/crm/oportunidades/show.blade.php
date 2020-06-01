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
           <h2><i class="material-icons">add</i>Ver Oportunidad</h2>
           <ul class="header-dropdown">
                @can('create.propiedades')
                    <li>
                        <a href="/admin/oportunidades/{{$oportunidad->id}}/edit" data-toggle="tooltip" data-original-title="Editar">
                            <i class="material-icons col-blue">edit</i>
                        </a>
                    </li>
                @endcan
            </ul>
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
                    <div class="col-lg-4">
                       <h4>Cliente</h4>
                       <p>{{$oportunidad->cliente->name}}</p>
                    </div>
                    <div class="col-lg-4">
                        <h4>Correo Electrónico</h4>
                        <p>{{$oportunidad->cliente->email}}</p>
                    </div>

                    <div class="col-lg-4">
                        <h4>ID Oferta</h4>
                        <p>{{str_pad($oportunidad->id, 7, "0", STR_PAD_LEFT)}}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                       <h4>Monto Ofertado</h4>
                       <p>{{$anuncio->moneda}}${{number_format($oportunidad->monto)}}</p>
                    </div>

                    <div class="col-lg-4">
                        <h4>Estado</h4>
                    <p class="badge" style="color:{{$oportunidad->estado->color_letra}}; border-radius: 10px; background:{{$oportunidad->estado->color}};">{{strtoupper($oportunidad->estado->nombre)}}</p>
                    </div>

                    <div class="col-lg-4">
                        <h4>Fecha</h4>
                        <p>{{date('d/m/Y', strtotime($oportunidad->fecha))}}</p>
                    </div>

                    <div class="col-lg-12">
                        <h4>Observación</h4>
                        <p>{{ucfirst($oportunidad->observacion)}}</p>
                    </div>
             
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-12">
                        <h4>Anuncio</h4>
                    </div>

                    <div class="col-lg-4">
                        <h4>Nombre</h4>
                        <p>{{$anuncio->titulo ?? $anuncio->name}}</p>
                    </div>

                    <div class="col-lg-4">
                        <h4>Fecha</h4>
                        <p>{{$anuncio->created_at }}</p>
                    </div>

                    <div class="col-lg-4">
                        <h4>Precio Anuncio</h4>
                        <p>{{$anuncio->moneda}}${{number_format($anuncio->monto)}}</p>
                    </div>

                    <div class="col-lg-4">
                        <h4>Tipo</h4>
                        <p>{{ucfirst($oportunidad->tipo)}}</p>
                    </div>

                    <div class="col-lg-4">
                        <a href="{{$url}}" target="_blank">Ver Anuncio</a>
                    </div>

                    
                    
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-12">
                        <h4>Eventos</h4>
                    </div>

                    <div class="col-lg-12">

                        <table id="evento_oportinidad_table" class="table table-bordered table-striped table-hover dataTable js-exportable" style="width: 100%;">
                            <thead>
                            <tr>
            
                                <th>
                                    <input type="checkbox" id="check-all" class="filled-in chk-col-teal" name="check[]" value="'+data.id+'">
                                    <label class="m-b-0" for="check-all"></label>
                                </th>
                                {{-- <th class="exportar">ID</th> --}}
                                <th class="exportar">ID</th>
                                <th class="exportar">Nombre</th>
                                <th class="exportar">Descripción</th>
                                <th class="exportar">Estado</th>
                                <th class="exportar">Analista</th>
                                <th class="exportar">Fecha</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
            
                        </table>

                        
                    </div>
                    
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

    {{-- Datatables --}}
    <script src="{{ asset('plugins/jquery-datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/Responsive-master/js/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('plugins/Responsive-master/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>

    <script src="{{ asset('plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <script>
        $(document).on('ready', function() {
            $("#garleria_propiedad").fileinput({'showUpload':false, 'previewFileType':'jpeg,jpg,png'});

            tinymce.init({
                selector: '#nota'
            });

            $('#evento_oportinidad_table').DataTable(
                $.extend(true, {}, $.InmobiliariaSoft.options.DATATABLE_TEMPLATE,{
                    ajax: '/admin/eventos/datatable/{{$oportunidad->id}}',
                    type: 'GET',
                    columns: [
                        {
                            data: function (data) {
                                return '<input type="checkbox" id="check-' + data.id + '" class="filled-in chk-col-teal" name="check[]" value="' + data.id + '">' +
                                    '<label class="m-b-0" for="check-' + data.id + '"></label>';
                            },
                            orderable: false,
                            searchable: false
                        },
                        { data: 'id', name: 'id' },
                        { data: 'nombre', name: 'nombre' },
                        { data: 'descripcion', name: 'descripcion' },
                        { data: function (data) {
                            return `<p class="badge" style="color:${data.estado.color_letra}; border-radius: 10px; background: ${data.estado.color};">${data.estado.nombre.toUpperCase()}</p>`;
                        }, name: 'estado.nombre' },
                        { data: 'analista.nombres', name: 'analista.nombres' },
                        { data: function(data) {
                        fecha = data.created_at.split('-');
                            return `${fecha[2].split(" ")[0]}/${fecha[1]}/${fecha[0]}`
                        }, name:'created_at' },
                        {
                            data: function (data) {
                                var buttons = '<div class="btn-group">';
        
                                // if (data.view === true) {
                                //     buttons += '<a href="/admin/marcas/' + data.id + '" target="_blank" class="btn btn-info btn-xs waves-effect" ' +
                                //         '  data-toggle="tooltip" data-original-title="Consultar"><i class="material-icons">remove_red_eye</i></a>';
        
                                // }
                                    
                                // if (data.edit === true) {
                                //     buttons +=
                                //         '<a href="/admin/oportunidades/' + data.id + '" target="_blank" class="btn btn-warning btn-xs waves-effect " ' +
                                //         'data-toggle="tooltip" data-original-title="Ver"><i class="material-icons">edit</i></a>'
                                //     ;
                                // }
        
                                if (data.edit === true) {
                                    buttons +=
                                        '<a href="/admin/oportunidades/' + data.id + '/edit" target="_blank" class="btn btn-warning btn-xs waves-effect edit-brand" ' +
                                        'data-toggle="tooltip" data-original-title="Editar"><i class="material-icons">edit</i></a>'
                                    ;
                                }
        
                                buttons += '</div>';
                                return buttons;
                            },
                            orderable: false,
                            searchable: false
                        }
        
                    ],
                }
            ));
        });
    </script>

@stop
