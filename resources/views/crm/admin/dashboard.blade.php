@extends('crm.layouts.base_crm')


@section('title','Dashboard')



@section('navbar_content')
    @include('crm.layouts.components.navbar')
@endsection

@section('left_sidebar_navbar_content')
    @include('crm.layouts.components.left_sidebar')
@endsection





@section('contenido_inmobiliaria')
    <div class="card">
        <div class="header">
            <h2><i class="material-icons">add</i>Here goes everything about charts</h2>


        </div>
    </div>
@endsection


@section('pages_css_files')


@stop


@section('pages_js_files')



@stop