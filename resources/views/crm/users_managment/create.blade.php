@extends('crm.layouts.base_crm')

@section('title', 'Usuarios')

@section('navbar_content')
    @include('crm.layouts.components.navbar')
@endsection


@section('left_sidebar_navbar_content')
    @include('crm.layouts.components.left_sidebar')
@endsection

@section('pages_css_files')
    <link href="{{ asset('plugins/multi-select/css/multi-select.css') }}" rel="stylesheet">
@stop


@section('contenido_inmobiliaria')
   <div class="card">
       <div class="header">
           <h2><i class="material-icons">add</i>Crear Usuario</h2>
       </div>

       @if ($errors->any())
           <div class="alert alert-danger alert-dismissible fade in" role="alert">
               <ul>
                   @foreach ($errors->all() as $error)

                       <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
       @endif

       <div class="body">
           <div class="row">

               {!! Form::open(['route' => 'admin_users_managment_store', 'method' => 'post']) !!}
                   <div class="col-xs-12 col-sm-12 col-md-4">
                       <div class="form-group form-float">
                           <div class="form-line">
                               <input type="text" class="form-control validate" name="nombres" required >
                               <label class="form-label">Nombres</label>
                           </div>
                       </div>
                   </div>

                   <div class="col-xs-12 col-sm-12 col-md-4">
                       <div class="form-group form-float">
                           <div class="form-line">
                               <input type="text" class="form-control validate" name="apellidos" required >
                               <label class="form-label">Apellidos</label>
                           </div>
                       </div>
                   </div>
                   <div class="col-xs-12 col-sm-12 col-md-4">
                       <div class="form-group form-float">
                           <div class="form-line">
                               <input type="text" class="form-control validate" name="telefono_principal" required >
                               <label class="form-label">Teléfono</label>
                           </div>
                       </div>
                   </div>

                   <div class="col-xs-12 col-sm-12 col-md-4">
                       <div class="form-group form-float">
                           <div class="form-line">
                               <input type="email" class="form-control validate" name="email" required >
                               <label class="form-label">Correo Electrónico</label>
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <select class="btn-group bootstrap-select form-control show-tick"  required data-live-search="true" name="role" id="clase">
                                        <option value="admin">Admin</option>
                                        <option value="analista">Analista</option>
                                </select>
                                <label class="form-label m-t--5">Rol</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group form-float">
                            <div class="form-line focused">
                                <select class="btn-group bootstrap-select form-control show-tick"  required data-live-search="true" name="notificacion_visita" id="clase">
                                        <option value="0">No</option>
                                        <option value="1">Si</option>
                                </select>
                                <label class="form-label m-t--5">Notificación Visita</label>
                            </div>
                        </div>
                    </div>
                   <div class="col-xs-12 col-sm-12 col-md-4">
                       <div class="form-group form-float">
                           <div class="form-line">
                               <input type="password" class="form-control validate" name="password" required>
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
                       <button type="submit" class="btn btn-primary m-t-15 waves-effect">Crear Usuario</button>
                   </div>

               {!! Form::close() !!}
           </div>


       </div>

   </div>
@endsection

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
