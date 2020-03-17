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
    <title>Ingrésa</title>
</head>
<body style="background-color:#fefefe!important;">
    <div class="form-content-box">
        <!-- details -->
        <div class="details">
            <!-- Main title -->
            <div class="main-title">
                <a href="{{route('home')}}"><img src="{{\App\Tema::where('activo',1)->first()->logo}}" style="height: 56px!important;" alt="logo"></a> 
                <h1 style="margin-top: 15px;"><span>INICIA SESIÓN</span></h1>
            </div>
            <!-- Form start-->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input type="email" name="email" class="input-text" placeholder="Correo electrónico">
                </div>
                <input type="hidden" id="login-error" value="{{count($errors)}}">

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
            <!-- Form end-->
        </div>
        <!-- Footer -->
        <div class="footer" style="background-color:#fefefe;">
            <span>
            ¿No tienes una cuenta? <a href="{{route('registro')}}" >Regístrate</a>
            </span>
        </div>
    </div>
</body>
</html>


<style>
@media  (min-height: 480px) {
  
  .form-content-box {
      margin: 0 auto!important;
  }
  .details {
    padding: 0px 20px!important;
  }

}

@media (min-height: 568px) {
  
  .form-content-box {
      margin: 0 auto!important;
  }
  .details {
    padding: 42px 20px!important;
  }

}

@media (min-height: 667px) {
  
  .details {
    padding: 91px 20px!important;
  }

}
@media (min-height: 640px) {
    .form-content-box {
      margin: 0 auto!important;
  }

.details {
    padding: 80px 20px!important;
}

}

@media (min-height: 731px) {

    .form-content-box {
        margin: 0px auto!important;
    }

    .details {
        padding: 124px 20px!important;
    }
}
@media  (min-height: 812px) {
 .details {
    padding: 170px 20px!important;
 }

}
</style>