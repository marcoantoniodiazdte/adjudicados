<!DOCTYPE html>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>

    <!-- Datepicker -->
    <link href="{{ asset('plugins/jquery-datepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('css/themes/theme-blue.min.css') }}" rel="stylesheet"/>

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    
    <link href="{{ asset('js/src/pivot/pivot.css') }}" rel="stylesheet">
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{  asset('plugins/ploty/plotly-latest.js')}}"></script>
    {{-- <script src="{{ asset('plugins/pivot/jqueryui.js') }}"></script> --}}
    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> --}}
    <script src="{{ asset('js/src/pivot/pivot.js') }}"></script>
    <script src="{{ asset('js/src/pivot/export_renderers.js') }}"></script>
    <script src="{{ asset('js/src/pivot/plotly_renderers.js') }}"></script>

    @yield('pages_css_files')
</head>

<body class="theme-blue">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->

      @yield('navbar_content')

    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
      @yield('left_sidebar_navbar_content')


        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">

        @yield('contenido_inmobiliaria')


        </div>
    </section>

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
    <script src="{{ asset('plugins/jquery-datepicker/daterangepicker.js') }}"></script>


    {{-- <script src="{{ asset('css/pivot.css') }}"></script> --}}

    <script src="{{ asset('js/src/app.js') }}"></script>

    @yield('pages_js_files')

</body>
</html>



