@extends('crm.layouts.base_crm')

@section('title', 'Bancos')

@section('navbar_content')
    @include('crm.layouts.components.navbar')
@endsection


@section('left_sidebar_navbar_content')
    @include('crm.layouts.components.left_sidebar')
@endsection

@section('pages_css_files')
@stop


@section('contenido_inmobiliaria')
    <div class="card">
        <div class="header">
            <h2><i class="material-icons">add</i>Editar Inmobiliaria</h2>
        </div>

        <div class="body">
            <div class="row">


                {!! Form::open(['route' => ['bancos.update',$banco->id], 'method' => 'PATCH','class' =>'validate']) !!}
                <div class="col-sm-8 col-md-12">
                    <div class="form-group form-float m-b-0 {{ $errors->has('name') ? 'has-errores' : '' }} ">
                        <div class="form-line focused">

                           {{-- {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}--}}
                            <input type="text" class="form-control" name="name" value="{{$banco->name}}"  maxlength="100" />
                            <label class="form-label">Nombre</label>
                        </div>
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    </div>
                </div>

                <div class="col-sm-8 col-md-12">
                    <div class="form-group form-float m-b-0 {{ $errors->has('short_name') ? 'has-errores' : '' }}">
                        <div class="form-line focused">
                            <input type="text" class="form-control" name="short_name"  value="{{$banco->short_name}}"  maxlength="100" />
                            <label class="form-label">Nombre Corto</label>
                            {{--{!! Form::label('short_name', 'Nombre Corto', ['class' => 'control-label']) !!}
                            {!! Form::text('short_name', null, ['class' => 'form-control']) !!}--}}
                        </div>
                        <small class="text-danger">{{ $errors->first('short_name') }}</small>
                    </div>
                </div>


                <div class="col-xs-12 align-center">
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Actualizar Banco</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>


        </div>
    </div>
@endsection

@section('pages_js_files')
    <script>
      /*  setTimeout(function() {
            $('.text-danger').fadeOut('fast');
        }, 3000);
*/
    </script>

@stop



