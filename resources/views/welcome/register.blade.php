<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <title>Regístro</title>
</head>
<body>
    <div class="form-content-box">
        <!-- details -->
        <div class="details">
            <!-- Main title -->
            <div class="main-title">
                <img src="{{asset('img/logos/logo.png')}}" href="{{route('home')}}" style="height: 56px!important;" alt="logo">
                <h1 style="margin-top: 15px;"><span>Regístrate</span></h1>
            </div>
            <!-- Form start-->
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="input-text" placeholder="Nombre">
                </div>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
                <div class="form-group">
                    <input type="email" name="email" class="input-text" placeholder="Correo Electronico">
                </div>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <div class="form-group">
                    <input type="password" name="password" class="input-text" placeholder="Contraseña">
                </div>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <div class="form-group">
                    <input id="password-confirm" type="password" class="input-text" placeholder="Confirmar Contraseña" name="password_confirmation" required>
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
                    <a href="{{route('ingresa')}}" >Volver al inicio de sesión.</a>
            </span>
        </div>
    </div>
</body>
</html>