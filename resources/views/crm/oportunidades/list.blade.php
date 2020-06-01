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
            <h2><i class="material-icons">list</i> Oportunidades</h2>
            <div class="row" style="display: flex; justify-content: flex-end;">

                <div class="col-sm-4 col-md-2 col-lg-2">
                    <div class="form-group form-float">
                        <div class="form-line focused">
                            <select class="btn-group bootstrap-select form-control show-tick" required data-live-search="true" multiple name="notificacion" id="estado_id">
                                    @foreach($estados as $estado) 
                                        <option value="{{$estado->id}}" selected >{{$estado->nombre}}</option>
                                    @endforeach
                            </select>
                            <label class="form-label m-t--5">Estado</label>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%; text-align: end;">
                        <i class="fa fa-calendar"></i>&nbsp;
                        <span></span> <i class="fa fa-caret-down"></i>
                    </div>
                </div>

                <div class="col-lg-2">
                    <button type="button" id="button-pivot" class="btn btn-info">Cubo Dinamico</button>
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
                    <th class="exportar">Nombre</th>
                    <th class="exportar">Moneda</th>
                    <th class="exportar">Monto</th>
                    <th class="exportar">Fecha</th>
                    <th class="exportar">Estado</th>
                    <th class="exportar">Tipo</th>
                    <th class="exportar">Observación</th>
                    <th>Opciones</th>
                </tr>
                </thead>

            </table>
        </div>
    </div>


    <div id="pivot-modal" class="modal fade" role="dialog">
        <div class="modal-dialog" style="width:95%!important; heigth:450px!important;">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button"
                            style="margin-top: -4px; font-size: 33px; font-weight: 100;color: #00b0e4; opacity: 100;"
                            class="close" data-dismiss="modal">&times;
                    </button>
                    <h2 width="70%" class="modal-title btn btn-info"><i class="material-icons "> timeline </i>
                        Cubo Dinámico </h2> <h4 style="display: inline; vertical-align: baseline;">| Oportunidades</h4>
                    <hr style=" margin-top: 12px; margin-bottom: 4px; border: 0px; border-top: 2px solid #00b0e4;">
                    <!-- <a style="float: right;color: #00b0e4;" href=""> Copyright &copy;</a> -->
                </div>
                <div class="modal-body" style="height: 750px!important; overflow:auto;">

                    <div class="col-md-12">
                        <div id="output" style=""></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

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
    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="{{ asset('js/src/pivot.js') }}"></script>
    <script src="{{ asset('js/src/export_renderers.js') }}"></script>
    <script src="{{ asset('js/src/plotly_renderers.js') }}"></script> --}}
    <script>

        

        var derivers_pivot_historico_tickest = $.pivotUtilities.derivers;
        var renderers_pivot_historico_tickest = $.extend($.pivotUtilities.renderers, $.pivotUtilities.plotly_renderers, $.pivotUtilities.export_renderers);
        var start = moment().subtract(6, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }

        // $("#button-pivot").click(function () {

        //     $.getJSON("/admin/oportunidades/pivot/table", {
        //        start_date : $("#reportrange").data('daterangepicker').startDate.format('YYYY-MM-DD'),
        //        end_date   : $("#reportrange").data('daterangepicker').endDate.format('YYYY-MM-DD')
        //     }, function (data) {
        //         $("#output").pivotUI(data.data, {
        //             renderers: renderers,
        //             cols: ["ID_Oportunidad"],
        //             rows: ["ID_Oportunidad", "Categoria", "Estado", "Fecha", "Mes", "Monto_Ofertado"],
        //             // rendererName: "Horizontal Bar Chart",
        //             vals: ["Monto_Ofertado"],
        //             aggregatorName: "Sum",
        //             rowOrder: "value_z_to_a",
        //         });
        //         $("#pivot-modal").modal('show');
        //     });
        // });

        $("#button-pivot").click(function () {
            $.ajax({
                url:"/admin/oportunidades/pivot/table",
                data:{
                    'start_date': $("#reportrange").data('daterangepicker').startDate.format('YYYY-MM-DD'),
                    'end_date': $("#reportrange").data('daterangepicker').endDate.format('YYYY-MM-DD'),
                },
                type:"GET",
                success:function (response) {

                    $("#output").pivotUI(response.data, {
                        renderers: renderers_pivot_historico_tickest,
                        cols: ["Estado", "Moneda"],
                        rows: ["ID_Oportunidad", "Referencia", "Nombre", "Categoria", "Cliente","Monto_Original"],
                        vals: ["Monto_Ofertado"],
                        aggregatorName: "Sum",
                        rendererName: "Table",
                        // rowOrder: "value_z_to_a",
                    });

                    derivers_pivot_historico_tickest = null;
                    renderers_pivot_historico_tickest = null;
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                    swal("Linea de Produccion", errorThrown, "error");
                }
            });

            $("#pivot-modal").modal('show');
        });


        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
            'Hoy': [moment(), moment()],
            'Ayer': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Ultimos 7 dias': [moment().subtract(6, 'days'), moment()],
            'Ultimos 30 dias': [moment().subtract(29, 'days'), moment()],
            'Este mes': [moment().startOf('month'), moment().endOf('month')],
            'Mes pasado': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
            'Ultimo trimestre': [moment().subtract(3, 'month'), moment()],
            'Ultimo semestre': [moment().subtract(6, 'month'), moment()],
            'Este año': [moment().startOf('year'), moment()],
            'Ultimo año': [moment().subtract(12, 'month'), moment()]
            }
        }, cb);

        cb(start, end);
        if($('#inmo_table').size() > 0){
    
            var table =  $('#inmo_table').DataTable(
            $.extend(true, {}, $.InmobiliariaSoft.options.DATATABLE_TEMPLATE,{
                ajax: {
                    url : '/admin/oportunidades',
                    type: 'GET',
                    data: function(params){
                        
                        params.start_date  = $("#reportrange").data('daterangepicker').startDate.format('YYYY-MM-DD');
                        params.end_date    = $("#reportrange").data('daterangepicker').endDate.format('YYYY-MM-DD');
                        params.estado_id   = $("#estado_id").val();
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
                    { data: 'titulo', name: 'vista_anuncios.nombre' },
                    { data: 'moneda', name: 'vista_anuncios.moneda'},
                    { data: function(data) {
                        return `<p style="text-align: end;">
                           ${Number(data.monto).toLocaleString(undefined, { minimumFractionDigits: 2,
                            maximumFractionDigits: 2})}
                        </p>`;
                    }, name:'monto', },
                    { data: function(data) {
                        fecha = data.fecha.split('-');
                        return `${fecha[2].split(" ")[0]}/${fecha[1]}/${fecha[0]}`
                    }, name:'fecha' },
                    { data: function (data) {
                            return `<p class="badge" style="color:${data.estado.color_letra}; border-radius:10px;  background: ${data.estado.color};">${data.estado.nombre.toUpperCase()}</p>`;
                        }, name: 'estado.nombre' },
                    { data: function(data) {
                        return data.tipo.toUpperCase()
                    }, name:'tipo' },
                    { data: 'observacion', name: 'observacion' },
                    {
                        data: function (data) {
                            var buttons = '<div class="btn-group">';
    
                            if (data.view === true) {
                                buttons += '<a href="/admin/oportunidades/' + data.id + '" target="_blank" class="btn btn-info btn-xs waves-effect" ' +
                                    '  data-toggle="tooltip" data-original-title="Consultar"><i class="material-icons">remove_red_eye</i></a>';
    
                            }
                                
                          
    
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

        $(document).on('click', '#filter', function() {
            table.ajax.reload();
        });
        
    }
  
    
    </script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/select.min.js') }}">
   


@stop



