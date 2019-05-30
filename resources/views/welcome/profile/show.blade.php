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
                        <h3>John Doe</h3>
                        <p>johndoe@gmail.com</p>

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
                                <a href="user-profile.html" class="active">
                                    <i class="flaticon-social"></i>Perfil
                                </a>
                            </li>
                            <li>
                                <a href="my-properties.html">
                                    <i class="flaticon-apartment"></i>Mis Propiedades
                                </a>
                            </li>
                            <li>
                                <a href="favorited-properties.html">
                                    <i class="fa fa-heart"></i>Propiedades Favoritas
                                </a>
                            </li>
                            <li>
                                <a href="change-password.html">
                                    <i class="flaticon-security"></i>Cambiar Contraseña
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="flaticon-sign-out-option"></i>Cerrar Sesion
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- User account box end -->
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <!-- My address start-->
                <div class="my-address">
                    <div class="main-title-2">
                        <h1><span>MI</span> PERFIL</h1>
                    </div>

                    <form action="index.html" method="GET">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="input-text" name="your name" placeholder="John Antony">
                        </div>
                        <div class="form-group">
                            <label>Titulo</label>
                            <input type="text" class="input-text" name="agent" placeholder="Your title">
                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="text" class="input-text" name="phone" placeholder="+55 4XX-634-7071">
                        </div>
                        <div class="form-group">
                            <label>Correo Electronico</label>
                            <input type="email" class="input-text" name="email" placeholder="johndoe@gmail.com">
                        </div>
                        <div class="form-group">
                            <label>Sobre Mí</label>
                            <textarea class="input-text" name="message" placeholder="Etiam luctus malesuada quam eu aliquet. Donec eget mollis tortor. Donec pellentesque eros a nisl euismod, ut congue orci ultricies. Fusce aliquet metus non arcu varius ullamcorper a sit amet nunc. Donec in lacus neque. Vivamus ullamcorper sed ligula vitae "></textarea>
                        </div>
                        <a href="#" class="btn button-md button-theme">Guardar Cambios</a>
                    </form>
                </div>
                <!-- My address end -->
            </div>
        </div>
    </div>
</div>
<!-- My profile end -->




@endsection