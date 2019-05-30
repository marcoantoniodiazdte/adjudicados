@extends('crm.layouts.base_crm')

@section('title', 'Inmobiliaria')

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
            <h2><i class="material-icons">add</i>Edit Agencia</h2>
        </div>
        <div>
            <div class="body">
                <div class="body">
                    <div id="validation-errors" class="alert alert-danger" style="display:none"></div>

                    <form method="POST" id="inmobiliaria_new_form" action="{{ route('agencias.update',['id'=>$company->id]) }}">
                        @method('PATCH')

                        @csrf
                        <h3>Datos Agencia</h3>
                        <section>
                            <div class="body">
                                <div class="row ">
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="form-group form-float">
                                            <div class="form-line focused">
                                                <input type="text" class="form-control validate" name="name" value="{{$company->name}}" required minlength="10">
                                                <label class="form-label">Name</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-8">
                                        <div class="form-group form-float">
                                            <div class="form-line focused">
                                                <input type="text" class="form-control validate" name="description" value="{{$company->description}}" required minlength="10">
                                                <label class="form-label">Description</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <h3>Modulos Agencia</h3>
                        <section>
                            <div class="body">
                                <div class="row ">

                                    <select id="modulos" name="modulos[]" class="ms validate" multiple="multiple">
                                        @foreach($modulos as $modulo)
                                            <option value="{{ $modulo->id }}"   {{ $company->modules->contains($modulo) ? 'selected':  ''   }} >{{ $modulo->title }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                        </section>

                        <h3>Administrador</h3>
                        <section>
                            <div class="boy">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="form-group form-float">
                                            <div class="form-line focused">
                                                <input type="text" class="form-control validate" name="name" value="{{$company->admin->name}}" required minlength="10">
                                                <label class="form-label">Name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="form-group form-float">
                                            <div class="form-line focused">
                                                <input type="email" class="form-control validate" name="email"  value="{{$company->admin->email}}"  required minlength="10">
                                                <label class="form-label">Email</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-4">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="password" class="form-control validate" name="password" required minlength="10">
                                                <label class="form-label">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>

                    </form>

                    <div class="row" id="loanding_inmobiliaria_new_form" style="display: none;">
                        <div class="col-sm-4 col-sm-offset-4">
                            <div class="loader text-center">
                                <div class="preloader pl-size-xl">
                                    <div class="spinner-layer pl-red">
                                        <div class="circle-clipper left">
                                            <div class="circle"></div>
                                        </div>
                                        <div class="circle-clipper right">
                                            <div class="circle"></div>
                                        </div>
                                    </div>
                                </div>
                                <p>Creando proyecto, por favor espere...</p>
                            </div>
                        </div>
                    </div> <!-- #loanding-project-new -->
                </div>
                <div class="row" id="inmobiliaria_new_loading" style="display: none;">
                    <div class="col-sm-4 col-sm-offset-4">
                        <div class="loader text-center">
                            <div class="preloader pl-size-xl">
                                <div class="spinner-layer pl-red">
                                    <div class="circle-clipper left">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="circle-clipper right">
                                        <div class="circle"></div>
                                    </div>
                                </div>
                            </div>
                            <p>Creando proyecto, por favor espere...</p>
                        </div>
                    </div>
                </div> <!-- #loanding_inmobiliaria_new -->
            </div>
        </div>
    </div>
@endsection
@section('pages_js_files')
    <script src="{{ asset('plugins/jquery-steps/jquery.steps.js') }}"></script>
    <script src="{{ asset('plugins/multi-select/js/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('plugins/materialize-stepper/js/mstepper.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/src/inmbiliaria.js') }}"></script>

@stop




