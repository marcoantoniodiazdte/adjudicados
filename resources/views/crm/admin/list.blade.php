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
            <h2><i class="material-icons">list</i> Usuarios</h2>
            <ul class="header-dropdown">
                <li>
                    <a href="{{route('companies.create')}}" data-toggle="tooltip" data-original-title="Create">
                        <i class="material-icons col-blue">add</i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="body">
            <table id="companies_table" class="table table-bordered table-striped table-hover dataTable js-exportable" style="width: 100%;">
                <thead>
                <tr>

                    <th>
                        <input type="checkbox" id="check-all" class="filled-in chk-col-teal" name="check[]" value="'+data.id+'">
                        <label class="m-b-0" for="check-all"></label>
                    </th>
                    <th class="exportar">ID</th>
                    <th class="exportar">Name</th>
                    <th class="exportar">Desc</th>
                    <th>Opciones</th>

                </tr>
                </thead>

            </table>
        </div>
    </div>

@endsection
@section('pages_css_files')

@stop




@section('pages_js_files')

@stop
