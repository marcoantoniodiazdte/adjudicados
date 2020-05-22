@extends('crm.layouts.base_crm')

@section('title', 'Usuarios - Editar')

@section('navbar_content')
    @include('crm.layouts.components.navbar')
@endsection


@section('left_sidebar_navbar_content')
    @include('crm.layouts.components.left_sidebar')
@endsection

@section('pages_css_files')
    <link href="{{ asset('plugins/materialize-stepper/css/mstepper.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/multi-select/css/multi-select.css') }}" rel="stylesheet">
@stop


@section('contenido_inmobiliaria')
    <div class="card">
        <div class="header">
            <h2><i class="material-icons">add</i>Editar Usuario</h2>
        </div>
        <div class="body">
            <div class="row">


               {{-- {!! Form::open(['route' => ['admin_users_managment_update',$admin->id], 'method' => 'PATCH','class' =>'validate']) !!}--}}
                {!! Form::model($admin, ['method'=>'PATCH', 'action'=> ['AdminController@update', $admin->id]]) !!}

                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <input type="text" class="form-control validate" name="nombres" value="{{$admin->nombres}}" required >
                                <label class="form-label">Nombres</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <input type="text" class="form-control validate" name="apellidos" value="{{$admin->apellidos}}" required >
                                <label class="form-label">Apellidos</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <input type="text" class="form-control validate" name="telefono_principal" value="{{$admin->telefono_principal}}"  required >
                                <label class="form-label">Teléfono</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <input type="email" class="form-control validate" name="email" value="{{$admin->email}}" required >
                                <label class="form-label">Correo Electrónico</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <select class="btn-group bootstrap-select form-control show-tick"  required data-live-search="true" name="role" id="clase">
                                        <option value="admin" {{($admin->role == 'admin' ? 'selected' : '')}} >Admin</option>
                                        <option value="analista" {{($admin->role == 'analista' ? 'selected' : '')}}>Analista</option>
                                </select>
                                <label class="form-label m-t--5">Rol</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <select class="btn-group bootstrap-select form-control show-tick"  required data-live-search="true" name="notificacion_visita" id="clase">
                                        <option value="0" {{($admin->notificacion_visita == '0' ? 'selected' : '')}} >No</option>
                                        <option value="1" {{($admin->notificacion_visita == '1' ? 'selected' : '')}}> Si</option>
                                </select>
                                <label class="form-label m-t--5">Notificación Visita</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <input type="password" class="form-control validate" name="password" >
                                <label class="form-label">Contraseña</label>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-8 col-md-12">
                    <h4>Permisos Categoría</h4>
                        <select id="roles_suario" name="categoria_analista[]" class="ms validate" multiple="multiple">
                            @foreach($categorias as $categoria)
                                <option value="{{$categoria->id}}">   {{$categoria->nombre}}</option>
                            @endforeach
                        </select>
                    </div>




                    <div class="col-xs-12 align-center">
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Guardar</button>
                    </div>

                {!! Form::close() !!}
            </div>
        </div>

    </div>
@endsection

@section('pages_css_files')

    <link href="{{ asset('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/Responsive-master/css/responsive.bootstrap.css') }}" rel="stylesheet">

@stop

@section('pages_js_files')
    <script src="{{ asset('plugins/multi-select/js/jquery.multi-select.js') }}"></script>
    <script>
      $(document).ready(function () {
        if($('#roles_suario').size() > 0){
          //Multi-select
          $('#roles_suario').multiSelect({ selectableOptgroup: true });
        }
      });
    </script>

@stop


