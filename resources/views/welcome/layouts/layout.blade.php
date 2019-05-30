<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inmobiliaria</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-submenu.css ')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/leaflet.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/map.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/linearicons/style.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/dropzone.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/magnific-popup.css')}}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('css/skins/default.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico')}}" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/ie10-viewport-bug-workaround.css')}}">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script type="text/javascript" src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{ asset('js/welcome/ie-emulation-modes-warning.js')}}"></script>
    
    <!-- JS FILES-->
    <script src="{{ asset('js/welcome/jquery-2.2.0.min.js')}}"></script>
    <script src="{{ asset('js/welcome/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/welcome/bootstrap-submenu.js')}}"></script>
    <script src="{{ asset('js/welcome/rangeslider.js')}}"></script>
    <script src="{{ asset('js/welcome/jquery.mb.YTPlayer.js')}}"></script>
    <script src="{{ asset('js/welcome/wow.min.js')}}"></script>
    <script src="{{ asset('js/welcome/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('js/welcome/jquery.easing.1.3.js')}}"></script>
    <script src="{{ asset('js/welcome/jquery.scrollUp.js')}}"></script>
    <script src="{{ asset('js/welcome/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{ asset('js/welcome/leaflet.js')}}"></script>
    <script src="{{ asset('js/welcome/leaflet-providers.js')}}"></script>
    <script src="{{ asset('js/welcome/leaflet.markercluster.js')}}"></script>
    <script src="{{ asset('js/welcome/dropzone.js')}}"></script>
    <script src="{{ asset('js/welcome/jquery.filterizr.js')}}"></script>
    <script src="{{ asset('js/welcome/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('js/welcome/maps.js')}}"></script>
    <script src="{{ asset('js/welcome/app.js')}}"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('js/welcome/ie10-viewport-bug-workaround.js')}}"></script>
    <!-- Custom javascript -->
    <script src="{{ asset('js/welcome/ie10-viewport-bug-workaround.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5shiv.min.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="page_loader" style="display:none;"></div>

    <!-- Encabezado inicio -->
    <header class="main-header">
        <div class="container">
            <nav class="navbar navbar-default" style="margin-top: 13px!important;">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navigation" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="/" class="">
                        <img src="{{asset('img/logos/logo.png')}}" style="height: 56px!important;" alt="logo">
                    </a>
                </div>


                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">
                    <ul class="nav navbar-nav">
                        <li class="dropdown active">
                            <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                                Comprar
                            </a>
                        </li>
                        <li class="dropdown" href="/buscar">
                            <a tabindex="0"  data-toggle="dropdown" data-submenu="" aria-expanded="false">
                                Alquilar
                            </a>
                        </li>
                        <li class="dropdown">
                            <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                                Inmobiliarias<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="agent-listing-grid.html">EURO-DOM</a></li>
                            </ul>
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Únete 
                            </a>
                        </li>
                        <li class="dropdown">
                            <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                                Contacto
                            </a>
                        </li>
                        <li class="dropdown">
                            <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                                Perfil<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="agent-listing-grid.html">Configuración</a></li>
                                <li><a href="agent-listing-grid.html">Cerrar Sesion</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right rightside-navbar">
                        <li>
                            <a  onclick="$('#loginModal').modal('show')" class="button">
                                Ingrésa o Regístrate
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    
    <!-- Encabezado final -->

    <!-- Contenido inicio  -->
    <div>
        
            <div class="modal property-modal animated bounceInDown" id="loginModal" style="z-index: 999999;" tabindex="-1" role="dialog" aria-labelledby="carModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <div class="modal-body">
                            <div>
                                <button type="button" style="font-size:38px;" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="form-content-box">
                                <div class="details">
                                    <div class="main-title">
                                        <h1>Inicia Sesión</h1>
                                    </div>
                                    <form action="index.html" method="GET">
                                        <div class="form-group">
                                            <input type="email" name="email" class="input-text" placeholder="Correo electrónico">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="Password" class="input-text" placeholder="Contraseña">
                                        </div>
                                        <div class="checkbox">
                                            <div class="ez-checkbox pull-left">
                                                <label>
                                                    <input type="checkbox" class="ez-hide">
                                                    Recordar credenciales
                                                </label>
                                            </div>
                                        
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" style="border-radius: 30px;" class="button-md button-theme btn-block" >Entrar</button>
                                            
                                        </div>
                                        <div>
                                            <a href="forgot-password.html" class="link-not-important ">Olvidé mi contraseña</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="footer">
                                    <span>
                                    ¿No tienes una cuenta? <a data-toggle="modal" href="#registerModal" >Regístrate</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal property-modal animated bounceInDown" id="registerModal" style="z-index: 999999;" tabindex="-1" role="dialog" aria-labelledby="carModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                        <div>
                            <button type="button" style="font-size:38px;" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="form-content-box">
                            <!-- details -->
                            <div class="details">
                                <!-- Main title -->
                                <div class="main-title">
                                    <h1><span>Regístrate</span></h1>
                                </div>
                                <!-- Form start-->
                                <form action="index.html" method="GET">
                                    <div class="form-group">
                                        <input type="text" name="fullname" class="input-text" placeholder="Nombre">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="input-text" placeholder="Correo Electronico">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="input-text" placeholder="Contraseña">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="confirm_Password" class="input-text" placeholder="Confirmar contraseña">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="button-md button-theme btn-block">Regístrate</button>
                                    </div>
                                </form>
                                <!-- Form end-->
                            </div>
                            <!-- Footer -->
                            <div class="footer">
                                <span>
                                     <a data-toggle="modal" href="#loginModal">Volver al inicio de sesión.</a>
                                </span>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        @yield('content')
    </div>
    <!-- Contenido final -->

    <!-- Footer inicio -->
    <footer class="main-footer clearfix">
        <div class="container">
            <!-- Footer info-->
            <div class="footer-info">
                <div class="row">
                    <!-- About us -->
                    <!-- <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-item">
                            <div class="main-title-2">
                                <h1>Contact Us</h1>
                            </div>
                        </div>
                    </div> -->
                    <!-- Links -->
                    <!-- <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                        <div class="footer-item">
                            <div class="main-title-2">
                                <h1>Links</h1>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer final -->

    <script>
    var $li = $('li.active');
    $("#loginModal").on('show.bs.modal', function(){
        $("#registerModal").modal('hide');
        $li.removeClass('active');
    });

    $("#loginModal").on('hidden.bs.modal', function(){
        $li.addClass('active');
        $("div.modal-backdrop").remove();
    });

    $("#registerModal").on('show.bs.modal', function(){
        $("#loginModal").modal('hide');
        $li.removeClass('active');
    });

    $("#registerModal").on('hidden.bs.modal', function(){
        $li.addClass('active');
    });
    </script>

    
</body>
</html>