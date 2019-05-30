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
           <h2><i class="material-icons">add</i>Crear Banco</h2>
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



               {!! Form::open(['route' => 'admin_mis_bancos_managment_store', 'method' => 'post','class' =>'validate']) !!}
                <div class="row">

                   <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                       <div class="form-group from-float ">
                           <div class="form-line focused">
                               <select  name="banco_id" class="form-control m-t-15 dropdown-toggledropdown-toggle validate"   data-live-search="true" style="width: 35px !important;">
                                   <option value="" selected disabled>Ellija Una Opcion</option>

                                   @foreach($informacion_bancos['bancos']  as $banco)
                                       <option value="{{ $banco->id }}">{{ $banco->name }}</option>
                                   @endforeach
                               </select>
                               <label class="form-label m-t-5">Bancos *</label>
                           </div>
                       </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                       <div class="form-group from-float ">
                           <div class="form-line focused">
                               <select  name="tipo_cuenta" class="form-control m-t-15 dropdown-toggledropdown-toggle validate"   data-live-search="true" style="width: 35px !important;">
                                   <option value="" selected disabled>Ellija Una Opcion</option>

                                   @foreach($informacion_bancos['tipos_cuentas'] as $key => $value)
                                       <option value="{{ $key }}">{{ $value }}</option>
                                   @endforeach
                               </select>
                               <label class="form-label m-t-5">Tipo Cuenta *</label>
                           </div>
                       </div>
                   </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                       <div class="form-group from-float ">
                           <div class="form-line focused">
                               <select  name="tipo_moneda" class="form-control m-t-15 dropdown-toggledropdown-toggle validate"   data-live-search="true" style="width: 35px !important;">
                                   <option value="" selected disabled>Ellija Una Opcion</option>

                                   @foreach($informacion_bancos['tipos_monedas']  as $tipo_moneda)
                                       <option value="{{ $tipo_moneda }}">{{ $tipo_moneda }}</option>
                                   @endforeach
                               </select>
                               <label class="form-label m-t-5">Tipo Moneda *</label>
                           </div>
                       </div>
                   </div>
                    <div class="col-sm-8 col-md-12">
                        <div class="form-group form-float m-b-0">
                            <div class="form-line">
                                <input type="text" class="form-control" name="numero_cuenta"  maxlength="100" />
                                <label class="form-label">Numero de Cuenta</label>
                            </div>
                        </div>
                    </div>

                </div>
               <div class="row">
                   <div class="col-xs-12 align-center">
                       <button type="submit" class="btn btn-primary m-t-15 waves-effect">Crear Banco</button>
                   </div>
               </div>



               {!! Form::close() !!}

       </div>

   </div>
@endsection

@section('pages_js_files')


@stop
