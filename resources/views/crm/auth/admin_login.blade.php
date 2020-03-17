<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} - @yield('title')</title>


    <!-- Favicon-->
    {{-- <link href="{{ ('favicon.ico') }}" rel="icon" type="text/css">--}}
    <!-- Google Fonts -->
    <link href="{{ asset('fonts/roboto_regular/stylesheet.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/material_icons/stylesheet.css') }}" rel="stylesheet">
    <!-- Bootstrap Core Css -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Bootstrap Select -->
    <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="{{ asset('plugins/node-waves/waves.css') }}" rel="stylesheet"/>

    <!-- Animation Css -->
    <link href="{{ asset('plugins/animate-css/animate.css') }}" rel="stylesheet"/>
    <!-- SweetAlert -->
    <link href="{{ asset('plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">
    <!-- Datepicker -->
    <link href="{{ asset('plugins/jquery-datepicker/datepicker.css') }}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('css/themes/theme-blue.min.css') }}" rel="stylesheet"/>

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    @yield('pages_css_files')
</head>

<body class="theme-blue">
    <div class="text-center">
        <div class="login-page" style="overflow-x: visible">
            <div class="login-box" style="background: white;">
                <div class="logo">
                    <img src="{{\App\Tema::where('activo',1)->first()->logo}}" href="{{route('home')}}" style="height: 56px!important;" alt="logo">
                    {{-- <a href="javascript:void(0);"><b>BHD LEON</b></a> --}}

                </div>
                <div class="card">
                    <div class="body">
                        {!! Form::open(['route' => 'admin.login.submit', 'method' => 'post']) !!}
                        {{-- <div class="msg">Ingrése sus credenciales para iniciar sesión</div> --}}
                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control" name="email" placeholder="Correo Electrónico" required autofocus>
                            </div>
                        </div>
                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock</i>
                                            </span>
                            <div class="form-line">
                                <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                            </div>
                        </div>
                        <div class="row">
                            {{--<div class="col-xs-8 p-t-5">
                                <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                                <label for="rememberme">Remember Me</label>
                            </div>--}}
                            <div class="col-xs-12">
                                <button class="btn btn-block bg-blue waves-effect" type="submit">Entrar</button>
                            </div>
                        </div>
                      {{--  <div class="row m-t-15 m-b--20">
                            <div class="col-xs-6 align-right">
                                <a href="forgot-password.html">Forgot Password?</a>
                            </div>
                        </div>--}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>
    </div>


<!-- Bootstrap Core Js -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

<script src="{{ asset('plugins/bootstrap-notify/bootstrap-notify.js') }}"></script>


<script src="{{ asset('plugins/sweetalert/sweetalert.min.js') }}"></script>

<!-- Select Plugin Js -->
<script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{ asset('plugins/node-waves/waves.js') }}"></script>

<!-- Custom Js -->
<script src="{{ asset('js/admin.js') }}"></script>
<script src="{{ asset('js/demo.js') }}"></script>

<!-- Datepicker -->
<script src="{{ asset('plugins/jquery-datepicker/datepicker.js') }}"></script>

<script src="{{ asset('js/src/app.js') }}"></script>

@yield('pages_js_files')

</body>
</html>



{{--
@extends('crm.layouts.base_crm')
@section('title', 'Admin Login')

@section('contenido_inmobiliaria')
    <div class="login-page m-auto m-l--100">
        <div class="login-box">
            <div class="logo">
                <a href="javascript:void(0);">Admin<b>Inmobiliaria</b></a>
                --}}
{{-- <small>Admin BootStrap Based - Material Design</small>--}}{{--

            </div>
            <div class="card">
                <div class="body">
                    {!! Form::open(['route' => 'admin.login.submit', 'method' => 'post']) !!}
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">person</i>
                                    </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">lock</i>
                                    </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-blue waves-effect" type="submit">Log In</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>

@endsection
--}}

