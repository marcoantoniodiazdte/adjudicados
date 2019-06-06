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
            <h2><i class="material-icons">add</i>Edit User</h2>
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
                                <input type="email" class="form-control validate" name="email" value="{{$admin->correo_electronico}}" required >
                                <label class="form-label">Correo Electrónico</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <input type="password" class="form-control validate" name="password" required>
                                <label class="form-label">Password</label>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-8 col-md-12">
                        <h4>Roles</h4>
                        <select id="roles_suario" name="roles_suario[]" class="ms validate" multiple="multiple">
                            @foreach($company_roles as $role)
                                <option value="{{$role->id}}" {{ $admin->roles->contains($role) ?  'selected' : ''  }}>   {{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="col-xs-12 align-center">
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Uctualizar Usuario</button>
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


