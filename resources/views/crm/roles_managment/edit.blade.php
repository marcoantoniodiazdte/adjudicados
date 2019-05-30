@extends('crm.layouts.base_crm')

@section('title', 'Inmobiliaria')

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
            <h2><i class="material-icons">edit</i>Editar Role</h2>
        </div>

        <div class="body">
            <div class="row">

                {!! Form::open(['route' => ['admin_roles_managment_update',$role->id], 'method' => 'PATCH','class' =>'validate']) !!}
                    <div class="col-sm-8 col-md-12">
                        <div class="form-group form-float m-b-0">
                            <div class="form-line focused">
                                <input type="text" class="form-control" name="name" value="{{ $role->name }}"  maxlength="100" />
                                <label class="form-label">Nombre</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-8 col-md-12">
                        <div class="form-group form-float m-b-0">
                            <div class="form-line focused">
                                <input type="text" class="form-control" name="description"  value="{{ $role->description }}" maxlength="100" />
                                <label class="form-label">Description</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-8 col-md-12">
                        <h4>Permisos</h4>
                        <select id="roles_permisos" name="roles_permisos[]" class="ms validate" multiple="multiple">
                            @foreach($modules_permisos as $module)
                                <optgroup style="font-size: 20px !important; font-weight: bold !important;" label="{{$module->title}}">
                                    @foreach($module->permissions as $permissions)
                                        <option value="{{$permissions->id}}" {{ $role->permissions->contains($permissions->id) ?  'selected' : ''  }}>   {{$permissions->title}} </option>
                                    @endforeach
                                </optgroup>
                            @endforeach
                        </select>
                    </div>



                    <div class="col-xs-12 align-center">
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Editar Role</button>
                    </div>



                {!! Form::close() !!}
            </div>
        </div>

    </div>
    </div>
@endsection



@section('pages_js_files')
    <script src="{{ asset('plugins/multi-select/js/jquery.multi-select.js') }}"></script>
    <script>
      $(document).ready(function () {
        if($('#roles_permisos').size() > 0){
          //Multi-select
          $('#roles_permisos').multiSelect({ selectableOptgroup: true });
        }
      });
    </script>

@stop
