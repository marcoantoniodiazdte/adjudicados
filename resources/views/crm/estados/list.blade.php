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
            <h2><i class="material-icons">list</i> Estados Oportunidades</h2>
            <ul class="header-dropdown">
                @can('create.propiedades')
                    <li>
                        <a href="{{route('estados.create')}}" data-toggle="tooltip" data-original-title="Crear">
                            <i class="material-icons col-blue">add</i>
                        </a>
                    </li>
                @endcan
            </ul>
        </div>

        <div class="body">

           <table id="inmo_table" class="table table-bordered table-striped table-hover dataTable js-exportable" style="width: 100%;">
                <thead>
                <tr>

                    <th>
                        <input type="checkbox" id="check-all" class="filled-in chk-col-teal" name="check[]" value="'+data.id+'">
                        <label class="m-b-0" for="check-all"></label>
                    </th>
                    {{-- <th class="exportar">ID</th> --}}
                    <th class="exportar">Estado</th>
                    <th class="exportar">Descripción</th>
                    <th class="exportar">Color</th>
                    <th class="exportar">Color Letra</th>
                    <th class="exportar">Notificación</th>
                    <th class="exportar">Sistema</th>
                    <th>Opciones</th>
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
    <script>
        if($('#inmo_table').size() > 0){
    
        $('#inmo_table').DataTable(
            $.extend(true, {}, $.InmobiliariaSoft.options.DATATABLE_TEMPLATE,{
                ajax: '/admin/estados',
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
                    // { data: 'id', name: 'id' },
                    { data:  function(data) {
                        return `<p class="badge" style="color:${data.color_letra}; border-radius:10px; background: ${data.color};">${data.nombre.toUpperCase()}</p>`;
                    } , name: 'nombre' },
                    { data: 'descripcion', name: 'descripcion' },
                    { data: function (data) {
                            color = `
                            
                            <input type=color disabled value="${data.color}" >`;

                            return color
                 
                        },
                        orderable: false,
                        searchable: false
                    },

                    { data: function (data) {
                            color = `
                            
                            
                           <input type=color disabled value="${data.color_letra}" >`;
                            return color

                            // <input type="color" name="color" id="color" disabled  style="background-color: ${data.color_letra};" />`;
                 
                        },
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: function ( data ) {
                            return (data.notificacion == 1 ) ? 'Si': 'No';
                        }  
                    },
                    { data: function (data) {
                        return (data.sistema == true) ? "Si" : "No";
                    }, name: 'descripcion' },
                    {
                        data: function (data) {
                            var buttons = '<div class="btn-group">';
    
                            // if (data.view === true) {
                            //     buttons += '<a href="/admin/marcas/' + data.id + '" target="_blank" class="btn btn-info btn-xs waves-effect" ' +
                            //         '  data-toggle="tooltip" data-original-title="Consultar"><i class="material-icons">remove_red_eye</i></a>';
    
                            // }
    
    
                            if (data.edit === true) {
                                buttons +=
                                    '<a href="/admin/estados/' + data.id + '/edit" target="_blank" class="btn btn-warning btn-xs waves-effect edit-brand" ' +
                                    'data-toggle="tooltip" data-original-title="Editar"><i class="material-icons">edit</i></a>'
                                ;
                            }

                            if (data.edit === true && data.sistema == false) {
                                buttons +=
                                    '<a  target="_blank" id="'+data.id+'" class="btn btn-danger delete-event btn-xs waves-effect" ' +
                                    'data-toggle="tooltip" data-original-title="Eliminar"><i class="material-icons">close</i></a>'
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

        $(document).on('click', '.delete-event', function() {
            id = $(this).attr('id');
            swal({
                title: "Eliminar",
                text: "¿Deseas eliminar éste estado?",
                type: "warning",
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Si",
                showCancelButton: true,
                closeOnConfirm: false
            }, function () {
                $.post(`/admin/estados/delete/${id}`, function(response){
                    if(response.ok) {
                        location.reload();
                    }
                })
            });
        })

        }
    
    </script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/select.min.js') }}">
   


@stop



