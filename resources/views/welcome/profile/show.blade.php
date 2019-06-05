@extends('welcome.layouts.layout')
@section('content')
<!-- My profile start -->
<div class="content-area my-profile">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <!-- User account box start -->
                <div class="user-account-box">
                    <div class="header clearfix">
                        <div class="edit-profile-photo">
                            <img src="http://placehold.it/150x150" alt="agent-1" class="img-responsive">
                            <div class="change-photo-btn">
                                <div class="photoUpload">
                                    <span><i class="fa fa-upload"></i> Subir foto</span>
                                    <input type="file" class="upload">
                                </div>
                            </div>
                        </div>
                        <h3>{{Auth::user()->name}}</h3>
                        <p>{{Auth::user()->email}}</p>

                        <ul class="social-list clearfix">
                            <li>
                                <a href="#" class="facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="google">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="rss">
                                    <i class="fa fa-rss"></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="content">
                        <ul>
                            <li>
                                <a href="{{route('profile')}}"   class="active">
                                    <i class="flaticon-social"></i>Perfil
                                </a>
                            </li>
                            <li>
                                <a href="{{route('profile.properties')}}">
                                    <i class="flaticon-apartment"></i>Mis Propiedades
                                </a>
                            </li>
                            <li>
                                <a href="{{route('profile.favorites')}}">
                                    <i class="fa fa-heart"></i>Propiedades Favoritas
                                </a>
                            </li>
                            <li>
                                <a href="{{route('credenciales')}}">
                                    <i class="flaticon-security"></i>Cambiar Contraseña
                                </a>
                            </li>
                            <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                            Cerrar Sesion</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                            </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- User account box end -->
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <!-- My address start-->
                
                <div class="my-address">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $message }}</strong>
                        </div>
                    @endif


                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                <strong>{{ $message }}</strong>
                        </div>
                     @endif
                    <div class="main-title-2">
                        <h1><span>MI</span> PERFIL</h1>
                    </div>

                    <form action="{{route('update.profile')}}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="input-text" name="name" value="{{Auth::user()->name}}" placeholder="John Antony">
                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="text" class="input-text" name="phone" placeholder="+55 4XX-634-7071">
                        </div>
                        <div class="form-group">
                            <label>Correo Electronico</label>
                            <input type="email" class="input-text" name="email" value="{{Auth::user()->email}}" >
                        </div>
                        <input type="hidden" name="id" value="{{Auth::user()->id}}">
                        <button type="submit" class="btn button-md button-theme">Guardar Cambios</button>
                    </form>
                </div>
                <!-- My address end -->
            </div>
        </div>
    </div>
</div>
<!-- My profile end -->




@endsection