@extends('welcome.layouts.layout')
@section('content')
<!-- Contact 3 start -->
<div class="contact-3 content-area-7">
    <div class="container">
        <div class="main-title mb-60">
            <h1>Contáctanos</h1>
            <p class="lead">La motivación nos impulsa a comenzar y el hábito nos permite continuar.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <!-- Contact details start -->
                <div class="contact-info">
                    <h3>Información</h3>
                    <ul class="contact-list">
                        <li><i class="fa fa-map-marker"></i> 20/F Green Road, Dhaka</li>
                        <li><i class="fa fa-phone"></i> +55 417 634 7071</li>
                        <li><i class="mr-3 fa fa-envelope"></i> info@themevessel.com</li>
                    </ul>
                    <h3>Síguenos</h3>
                    <ul class="social-list clearfix">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <!-- Contact details end -->
            </div>
            <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                <!-- Contact form start -->
                <div class="contact-form">
                    <form id="contact_form" action="index.html" method="GET" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group fullname">
                                    <input type="text" name="full-name" class="input-text" placeholder="Nombre">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group enter-email">
                                    <input type="email" name="email" class="input-text" placeholder="Correo Electronico">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group subject">
                                    <input type="text" name="subject" class="input-text" placeholder="Asunto">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group number">
                                    <input type="text" name="phone" class="input-text" placeholder="Telefono">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
                                <div class="form-group message">
                                    <textarea class="input-text" name="message" placeholder="Mensaje"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group send-btn mb-0  text-center">
                                    <button type="submit" class="button-md button-theme">Enviar Mensaje</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Contact form end -->
            </div>
        </div>
    </div>
</div>
<!-- Contact 3 end -->
@endsection