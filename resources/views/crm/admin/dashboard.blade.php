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

    {{--    {{ asset('storage/file.txt')}}
--}}
        </div>
        <div class="body">

           {{-- <div class="row">
                <div class="col-sm-4 m-b-10">
                    <div class="form-group form-float">
                        <div class="form-line focused">
                            {!! Form::select('name', ['L' => 'Large', 'S' => 'Small'] , null , ['class' => 'form-control m-t-0']) !!}
                            <label class="form-label m-t--5">Categoria *</label>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4 m-b-10">
                    <div class="form-group form-float">
                        <div class="form-line focused">
                            {!! Form::select('ad', ['L' => 'Large', 'S' => 'Small'] , null , ['class' => 'form-control m-t-5']) !!}
                            <label class="form-label m-t--0">Categoria *</label>
                        </div>
                    </div>
                </div>
            </div>--}}

        </div>


    </div>
@endsection


@section('pages_css_files')


@stop


@section('pages_js_files')



@stop