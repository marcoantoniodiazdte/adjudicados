@extends('crm.layouts.base_crm')


@section('title','Inmobiliarias')



@section('navbar_content')
    @include('crm.layouts.components.navbar')
@endsection

@section('left_sidebar_navbar_content')
    @include('crm.layouts.components.left_sidebar')
@endsection



@section('contenido_inmobiliaria')
    <div class="card">
        <div class="header">
            <h2><i class="material-icons">list</i> Eventos</h2>
            <div class="row" style="display:flex; justify-content: flex-end;">

                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="form-group form-float">
                        <div class="form-line focused">
                            <select class="btn-group bootstrap-select form-control show-tick" required data-live-search="true" multiple name="notificacion" id="estado_id">
                                @foreach($estados as $estado) 
                                 <option value="{{$estado->id}}" selected > {{$estado->nombre}}</option>
                                @endforeach
                            </select>
                            <label class="form-label m-t--5">Estado Evento</label>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-md-2 col-lg-2">
                    <div class="form-group form-float">
                        <div class="form-line focused">
                            <select class="btn-group bootstrap-select form-control show-tick" required data-live-search="true" multiple name="notificacion" id="analista_id">
                                    @foreach($analistas as $analista) 
                                        <option value="{{$analista->id}}" selected >{{$analista->nombres}}</option>
                                    @endforeach
                            </select>
                            <label class="form-label m-t--5">Analista</label>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3">
                    <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                        <i class="fa fa-calendar"></i>&nbsp;
                        <span></span> <i class="fa fa-caret-down"></i>
                    </div>
                </div>
                <div class="col-lg-1">
                    <button type="button" id="filter" class="btn btn-info">Filtrar</button>
                </div>
            </div>

            
        </div>

        <div class="body">

           <table id="inmo_table" class="table table-bordered table-striped table-hover dataTable js-exportable" style="width: 100%;">
                <thead>
                <tr>

                    <th>
                        <input type="checkbox" id="check-all" class="filled-in chk-col-teal" name="check[]" value="'+data.id+'">
                        <label class="m-b-0" for="check-all"></label>
                    </th>
                    <th class="exportar">ID</th>
                    <th class="exportar">Oportunidad</th>
                    <th class="exportar">Tipo. Oportunidad</th>
                    <th class="exportar">Evento</th>
                    <th class="exportar">Descripción</th>
                    <th class="exportar">Estado Evento</th>
                    <th class="exportar">Analista</th>
                    <th class="exportar">Fecha</th>
                    {{-- <th class="exportar">Fecha</th>
                    <th class="exportar">Estado</th>
                    <th class="exportar">Tipo</th>
                    <th class="exportar">Observación</th> 
                    <th>Opciones</th> --}}
                </tr>
                </thead>

            </table>
        </div>
    </div>

@endsection



@section('pages_css_files')

    <link href="{{ asset('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/Responsive-master/css/responsive.bootstrap.css') }}" rel="stylesheet">

@stop


@section('pages_js_files')
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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script>


    var start = moment().subtract(6, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }

    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Hoy': [moment(), moment()],
           'Ayer': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Ultimos 7 dias': [moment().subtract(6, 'days'), moment()],
           'Ultimos 30 dias': [moment().subtract(29, 'days'), moment()],
           'Este mes': [moment().startOf('month'), moment().endOf('month')],
           'Mes pasado': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);

    cb(start, end);

        if($('#inmo_table').size() > 0){
    
        var table =  $('#inmo_table').DataTable(
            $.extend(true, {}, $.InmobiliariaSoft.options.DATATABLE_TEMPLATE,{
                // ajax: '/admin/eventos',
                // type: 'POST',
                // data: function (d) {
                //     d.start_date = $("#reportrange").data('daterangepicker').startDate.format('YYYY-MM-DD');
                //     d.end_date = $("#reportrange").data('daterangepicker').startDate.format('YYYY-MM-DD');
                // },
                ajax:{
                      url: '{{URL::to('/admin/eventos')}}',
                      type: "GET",
                      data: function(params){
                        
                            params.start_date  = $("#reportrange").data('daterangepicker').startDate.format('YYYY-MM-DD');
                            params.end_date    = $("#reportrange").data('daterangepicker').endDate.format('YYYY-MM-DD');
                            params.analista_id = $("#analista_id").val();
                            params.estado_evento_id = $("#estado_id").val();
                        
                                
                        return params;
                      }
                },
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
                    { data: function (data) {
                        return  `<a href="/admin/oportunidades/${data.oportunidad.id}" target="_blank">[${data.oportunidad.id}]</a>`;
                    }, name: 'oportunidad.id' },
                    { data: function (data) {
                        return data.oportunidad.tipo.toUpperCase()
                    }, name: 'oportunidad.tipo' },
                    { data: 'nombre', name: 'nombre' },
                    { data: 'descripcion', name: 'descripcion' },
                    { data: function (data) {
                            return `<p class="badge" style="color:${data.estado.color_letra}; border-radius:10px; background: ${data.estado.color};">${data.estado.nombre.toUpperCase()}</p>`;
                        }, name: 'estado.nombre' },
                    { data: 'analista.nombres', name: 'analista.nombres' },
                    { data: 'created_at', name: 'created_at' },

                    // { data: function(data) {
                    //     return `<p style="text-align: end;">
                    //         ${Number(data.monto).toLocaleString(undefined, { minimumFractionDigits: 2,
                    //         maximumFractionDigits: 2})}
                    //     </p>`;
                    // }, name:'monto' },
                    // { data: function(data) {
                    //     fecha = data.fecha.split('-');
                    //     return `${fecha[2].split(" ")[0]}/${fecha[1]}/${fecha[0]}`
                    // }, name:'fecha' },
                    // { data: function(data) {
                    //     return data.tipo.toUpperCase()
                    // }, name:'tipo' },
                    // { data: 'observacion', name: 'observacion' },
                    // {
                    //     data: function (data) {
                    //         var buttons = '<div class="btn-group">';
    
                    //         if (data.view === true) {
                    //             buttons += '<a href="/admin/oportunidades/' + data.id + '" target="_blank" class="btn btn-info btn-xs waves-effect" ' +
                    //                 '  data-toggle="tooltip" data-original-title="Consultar"><i class="material-icons">remove_red_eye</i></a>';
    
                    //         }
                                
                          
    
                    //         if (data.edit === true) {
                    //             buttons +=
                    //                 '<a href="/admin/oportunidades/' + data.id + '/edit" target="_blank" class="btn btn-warning btn-xs waves-effect edit-brand" ' +
                    //                 'data-toggle="tooltip" data-original-title="Editar"><i class="material-icons">edit</i></a>'
                    //             ;
                    //         }
    
                    //         buttons += '</div>';
                    //         return buttons;
                    //     },
                    //     orderable: false,
                    //     searchable: false
                    // }
    
                ],
            }
        ));

        }

        $(document).on('click', '#filter', function() {
            table.ajax.reload();
        });



    
    </script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/select.min.js') }}">
   


@stop



