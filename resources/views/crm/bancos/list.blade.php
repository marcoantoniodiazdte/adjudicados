@extends('crm.layouts.base_crm')


@section('title','Bancos')

@section('navbar_content')
    @include('crm.layouts.components.navbar')
@endsection

@section('left_sidebar_navbar_content')
    @include('crm.layouts.components.left_sidebar')
@endsection

@section('contenido_inmobiliaria')
    <div class="card">
        <div class="header">
            <h2><i class="material-icons">list</i> Bancos</h2>
            <ul class="header-dropdown">
                @can('create.propiedades')
                    <li>
                        <a href="{{route('bancos.create')}}" data-toggle="tooltip" data-original-title="Crear">
                            <i class="material-icons col-blue">add</i>
                        </a>
                    </li>
                @endcan
            </ul>
        </div>

        <div class="body">
            <div class="body">
                <table id="bancos_table" class="table table-bordered table-striped table-hover dataTable js-exportable" style="width: 100%;">
                    <thead>
                    <tr>
                        <th>
                            <input type="checkbox" id="check-all" class="filled-in chk-col-teal" name="check[]" value="'+data.id+'">
                            <label class="m-b-0" for="check-all"></label>
                        </th>
                        <th class="exportar">ID</th>
                        <th class="exportar">Name</th>
                        <th class="exportar">Short Name</th>
                        <th>Opciones</th>

                    </tr>
                    </thead>

                </table>
            </div>
        </div>
    </div>

@endsection

@section('pages_css_files')

    <link href="{{ asset('public/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('public/plugins/Responsive-master/css/responsive.bootstrap.css') }}" rel="stylesheet">

@stop


@section('pages_js_files')

    <script src="{{ asset('public/plugins/jquery-datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/plugins/Responsive-master/js/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('public/plugins/Responsive-master/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('public/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('public/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('public/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>

    <script src="{{ asset('public/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('public/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('public/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('public/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>
    <script src="{{ asset('public/plugins/jquery-datatable/extensions/export/select.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            if($('#bancos_table').size() > 0 ){
                $('#bancos_table').DataTable(
                    $.extend(true, {}, $.InmobiliariaSoft.options.DATATABLE_TEMPLATE,{
                            ajax: '/admin/bancos',
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
                                { data: 'name', name: 'name' },
                                { data: 'short_name', name: 'short_name' },
                                {
                                    data: function (data) {
                                        var buttons = '<div class="btn-group">';

                                        if (data.view === true) {
                                            buttons += '<a href="/admin/bancos/' + data.id + '" target="_blank" class="btn btn-info btn-xs waves-effect" ' +
                                                '  data-toggle="tooltip" data-original-title="Consultar"><i class="material-icons">remove_red_eye</i></a>';

                                        }

                                        if (data.edit === true) {
                                            buttons +=
                                                '<a href="/admin/bancos/' + data.id + '/edit" target="_blank" class="btn btn-warning btn-xs waves-effect edit-brand" ' +
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

            }



        });
    </script>


@stop



