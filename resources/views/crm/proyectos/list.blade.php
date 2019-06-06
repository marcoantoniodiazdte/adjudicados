@extends('crm.layouts.base_crm')


@section('title','Proyectos')



@section('navbar_content')
    @include('crm.layouts.components.navbar')
@endsection

@section('left_sidebar_navbar_content')
    @include('crm.layouts.components.left_sidebar')
@endsection





@section('contenido_inmobiliaria')
    <div class="card">
        <div class="header">
            <h2><i class="material-icons">list</i> Proyectos</h2>
            <ul class="header-dropdown">
                @can('create.propiedades')
                    <li>
                        <a href="{{route('proyectos.create')}}" data-toggle="tooltip" data-original-title="Create">
                            <i class="material-icons col-blue">add</i>
                        </a>
                    </li>
                @endcan
            </ul>
        </div>

        <div class="body">


           <table id="proyectos_table" class="table table-bordered table-striped table-hover dataTable js-exportable" style="width: 100%;">
                <thead>
                <tr>

                    <th>
                        <input type="checkbox" id="check-all" class="filled-in chk-col-teal" name="check[]" value="'+data.id+'">
                        <label class="m-b-0" for="check-all"></label>
                    </th>
                    <th class="exportar">ID</th>
                    <th class="exportar">Name</th>
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
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/select.min.js') }}">

    </script><script src="{{ asset('js/src/proyectos.js') }}"></script>


@stop



