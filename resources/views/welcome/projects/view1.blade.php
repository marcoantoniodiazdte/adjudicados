@extends('welcome.layouts.layout')

@section('content')
<!-- Properties details page start -->
<div class="content-area properties-details-page">
    <div class="">
        <div class="carousel" data-flickity='{ "fullscreen": true, "lazyLoad": 1 }'>
            <img class="carousel-image"
            data-flickity-lazyload="https://www.cadiz4rentals.com/alquiler/fotos/2/152794648191d509eeadd977d43ed491d9eb5b28f2/152899309256804145f4ac611906f43565cf2b87f8.jpg" />
            <img class="carousel-image"
            data-flickity-lazyload="https://s-ec.bstatic.com/images/hotel/max1024x768/712/71260445.jpg" />
            <img class="carousel-image"
            data-flickity-lazyload="http://www.vivare.co/images/other_images/vivare-apartamentos-big-5.jpg" />
            <img class="carousel-image"
            data-flickity-lazyload="https://t-ec.bstatic.com/images/hotel/max1024x768/389/38977679.jpg" />
            <img class="carousel-image"
            data-flickity-lazyload="https://construccionesprisma.com.co/images/apartment_photos/22_41_pradoalto97.5m201.jpg" />
            <img class="carousel-image"
            data-flickity-lazyload="https://www.contex.com.co/wp-content/uploads/2017/06/Olivar_Apartamentos_Porteria.jpg" />
            <img class="carousel-image"
            data-flickity-lazyload="https://thumb.housinganywhere.com/images/room/1404100/afe7da81-d061-11e8-98db-42010af00008.jpg?kind=large&rotate=0" />
            <img class="carousel-image"
            data-flickity-lazyload="https://viewinmobiliario2.s3.sa-east-1.amazonaws.com/pictures/6881/Baluarte-apartamentos-sabaneta-loma-de-san-jose-apartamentos-en-medellin-esclusivos13_original.jpg?1515098676" />
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <!-- Properties details section start -->
                <div class="properties-details-section sidebar-widget">
                <!-- <div class="main-title-2">
                    <h1><span>Proyecto  </span>Arroyo Hondo 3</h1>
                </div> -->

                <div class="heading-properties clearfix sidebar-widget">
                    <div class="pull-left">
                        <h3>Proyecto Residencial</h3>
                        <p>
                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                        </p>
                    </div>
                    <div class="pull-left" style="margin-left: 20px;">
                        <span>Estado:</span>
                        <p>
                            <label class="label label-default">EN CONSTRUCCION</label>
                        </p>
                    </div>

                    <div class="pull-left" style="margin-left: 20px;">
                        <span>Entrega:</span>
                        <p>
                            <label class="label label-default">11-03-2020</label>
                        </p>
                    </div>

                    <div class="pull-right">
                        <h3><span>RD$3,405,000</span></h3>
                        <h5>
                            <!-- Per Manth -->
                        </h5>
                    </div>
                </div>

                    <!-- Advanced search start -->
                    <!-- <div class="advabced-search hidden-lg hidden-md">
                        <div class="main-title-2">
                            <h1><span>Advanced</span> Search</h1>
                        </div>

                        <form method="GET">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-status" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Property Status</option>
                                    <option>For Sale</option>
                                    <option>For Rent</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="location" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Location</option>
                                    <option>United States</option>
                                    <option>United Kingdom</option>
                                    <option>American Samoa</option>
                                    <option>Belgium</option>
                                    <option>Cameroon</option>
                                    <option>Canada</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-types" data-live-search="true" data-live-search-placeholder="Search value" >
                                    <option>Property Types</option>
                                    <option>Residential</option>
                                    <option>Commercial</option>
                                    <option>Land</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <select class="selectpicker search-fields" name="area-from" data-live-search="true" data-live-search-placeholder="Search value" >
                                    <option>Area From</option>
                                    <option>1000</option>
                                    <option>800</option>
                                    <option>600</option>
                                    <option>400</option>
                                    <option>200</option>
                                    <option>100</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bedrooms">
                                            <option>Bedrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bathroom">
                                            <option>Bathroom</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="balcony">
                                            <option>Balcony</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" data-live-search="true" name="garage">
                                            <option>Garage</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="range-slider">
                                <label>Area</label>
                                <div data-min="0" data-max="10000" data-unit="Sq ft" data-min-name="min_area" data-max-name="max_area" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="range-slider">
                                <label>Price</label>
                                <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="form-group">
                                <button class="search-button">Search</button>
                            </div>
                        </form>
                    </div> -->
                    <!-- Advanced search end -->

                    <!-- Property description start -->
                    <div class="panel-box properties-panel-box Property-description">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab" aria-expanded="true">Descripción</a></li>
                            <li class=""><a href="#tab2default" data-toggle="tab" aria-expanded="false">Condiciones</a></li>
                            <li class=""><a href="#tab3default" data-toggle="tab" aria-expanded="false">Comodidades</a></li>
                            <li class=""><a href="#tab4default" data-toggle="tab" aria-expanded="false">Planos</a></li>
                            <li class=""><a href="#tab5default" data-toggle="tab" aria-expanded="false">Video</a></li>
                        </ul>
                        <div class="panel with-nav-tabs panel-default">
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab1default">
                                        <div class="main-title-2">
                                            <h1><span>Descripción</span></h1>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper placerat, velit risus accumsan nisl, eget tempor lacus est vel nunc. Proin accumsan elit sed neque euismod fringilla. Curabitur lobortis nunc velit, et fermentum urna dapibus non. Vivamus magna lorem, elementum id gravida ac, laoreet tristique augue. Maecenas dictum lacus eu nunc porttitor, ut hendrerit arcu efficitur.</p>
                                        <br>
                                        <p>Nam mattis lobortis felis eu blandit. Morbi tellus ligula, interdum sit amet ipsum et, viverra hendrerit lectus. Nunc efficitur sem vel est laoreet, sed bibendum eros viverra. Vestibulum finibus, ligula sed euismod tincidunt, lacus libero lobortis ligula, sit amet molestie ipsum purus ut tortor. Nunc varius, dui et sollicitudin facilisis, erat felis imperdiet felis, et iaculis dui magna vitae diam. Donec mattis diam nisl, quis ullamcorper enim malesuada non. Curabitur lobortis eu mauris nec vestibulum. Nam efficitur, ex ac semper malesuada nisi odio consequat dui, hendrerit vulputate odio dui vitae massa. Aliquam tortor urna, tincidunt</p>
                                    </div>
                                    <div class="tab-pane fade features" id="tab2default">
                                        <!-- Properties condition start -->
                                        <div class="properties-condition">
                                            <div class="main-title-2">
                                                <h1><span>Condiciones</span></h1>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <ul class="condition">
                                                        <li>
                                                            <i class="fa fa-check-square"></i>3 habitaciones
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Baños
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <ul class="condition">
                                                        <li>
                                                            <i class="fa fa-check-square"></i>4800 mt2
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>TV
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <ul class="condition">
                                                        <li>
                                                            <i class="fa fa-check-square"></i>1 Garage
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Balcon
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Properties condition end -->
                                    </div>
                                    <div class="tab-pane fade technical" id="tab3default">
                                        <!-- Properties amenities start -->
                                        <div class="properties-amenities">
                                            <div class="main-title-2">
                                                <h1><span>Comodidades</span></h1>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <ul class="amenities">
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Aire Acondicionado
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Balcon
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Piscina
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>TV
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Gym
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <ul class="amenities">
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Wifi
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Parqueo
                                                        </li>
                                                      
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <ul class="amenities">
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Telefono
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Jacuzzi
                                                        </li>

                                                        <li>
                                                            <i class="fa fa-check-square"></i>Garage
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Properties amenities end -->
                                    </div>
                                    <div class="tab-pane fade" id="tab4default">
                                        <!-- Floor Plans start -->
                                        <div class="floor-plans">
                                            <div class="main-title-2">
                                                <h1><span>Planos</span></h1>
                                            </div>
                                            <table>
                                                <tbody><tr>
                                                    <td><strong>Tamaño</strong></td>
                                                    <td><strong>Habitaciones</strong></td>
                                                    <td><strong>Baños</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>1600</td>
                                                    <td>3</td>
                                                    <td>2</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <img src="http://placehold.it/708x359" alt="floor-plans" class="img-responsive">
                                        </div>
                                        <!-- Floor Plans end -->
                                    </div>
                                    <div class="tab-pane fade" id="tab5default">
                                        <!-- Inside properties start  -->
                                        <div class="inside-properties">
                                            <!-- Main Title 2 -->
                                            <div class="main-title-2">
                                                <h1><span>Video </span></h1>
                                            </div>
                                            <iframe src="https://www.youtube.com/embed/5e0LxrLSzok" allowfullscreen=""></iframe>
                                        </div>
                                        <!-- Inside properties end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Property description end -->
                </div>
                <!-- Properties details section end -->

                <!-- Properties details section start -->
                <div class="properties-details-section sidebar-widget">
                    <!-- Contact 1 start -->
                    <div class="contact-1">
                        <div class="contact-form">
                            <!-- Main Title 2 -->
                            <div class="main-title-2">
                                <h1><span>Formulario</span> de Contacto</h1>
                            </div>
                            <form id="contact_form" action="index.html" method="GET" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group fullname">
                                            <input type="text" name="full-name" class="input-text" placeholder="Nombre">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group enter-email">
                                            <input type="email" name="email" class="input-text"  placeholder="Correo Electronico">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group subject">
                                            <input type="text" name="subject" class="input-text" placeholder="Asusto">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group number">
                                            <input type="text" name="phone" class="input-text" placeholder="Telefono">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group message">
                                            <textarea class="input-text" name="message" placeholder="Mensaje"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group send-btn mb-0">
                                            <button type="submit" class="button-md button-theme">Enviar Mensaje</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Contact 1 end -->
                </div>
                <!-- Properties details section end -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <!-- Sidebar start -->
                <div class="sidebar right">
                    <div class="sidebar-widget helping-box clearfix">
                        <div class="helping-center">
                            <div class="icon"><i class="fa fa-building"></i></div>
                            <h4>Inmobiliaria</h4>
                            <p><a href="">Euro-Dom</a> </p>
                        </div>
                        <div class="helping-center">
                            <div class="icon"><i class="fa fa-map-marker"></i></div>
                            <h4>Dirección</h4>
                            <span>123 Kathal St. Tampa City,</span>
                        </div>
                        <div class="helping-center">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h4>Telefono</h4>
                            <p><a href="tel:+55-417-634-7071">+55 417 634 7071</a> </p>
                        </div>
                    </div>
                     <!-- Mortgage calculator start -->
                     <div class="sidebar-widget contact-1 mortgage-calculator">
                        <div class="main-title-2">
                            <h1><span><i class="fa fa-calculator"></i> Calculadora  </span>de Prestamos</h1>
                        </div>
                        <div class="contact-form">
                            <form id="agent_form" action="index.html" method="GET" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Monto</label>
                                            <input type="text" class="input-text" placeholder="$87.000">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Tasa (%)</label>
                                            <input type="text" class="input-text" placeholder="10%">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">Periodo del Prestamo</label>
                                            <input type="text" class="input-text" placeholder="10 meses">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-0">
                                            <button class="search-button">Calcular</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>                                 
                  

                    <!-- Popular posts start -->
                    <div class="sidebar-widget popular-posts">
                        <div class="main-title-2">
                            <h1><span>Propiedades</span> Recientes</h1>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="http://placehold.it/90x63" alt="small-properties-1">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="properties-details.html">Sweet Family Home</a>
                                </h3>
                                <p>February 27, 2018</p>
                                <div class="price">
                                    $734,000
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="http://placehold.it/90x63" alt="small-properties-2">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="properties-details.html">Modern Family Home</a>
                                </h3>
                                <p>February 27, 2018</p>
                                <div class="price">
                                    $734,000
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="http://placehold.it/90x63" alt="small-properties-3">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="properties-details.html">Beautiful Single Home</a>
                                </h3>
                                <p>February 27, 2018</p>
                                <div class="price">
                                    $734,000
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Popular posts end -->

                    <!-- Social media start -->
                    <div class="social-media sidebar-widget clearfix">
                        <!-- Main Title 2 -->
                        <div class="main-title-2">
                            <h1><span>Redes</span> Sociales</h1>
                        </div>
                        <!-- Social list -->
                        <ul class="social-list">
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                    <!-- Social media end -->
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar end -->
            </div>
        </div>
    </div>
</div>
<!-- Properties details page end -->
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<!-- <script type="text/javascript" src="{{ URL::asset('js/user/user.js') }}"></script> -->
<style>
/* external css: flickity.css, fullscreen.css */

* { box-sizing: border-box; }

body { font-family: sans-serif; }

.carousel {
  background: #EEE;
}

.carousel-image {
  display: block;
  height: 350px;
  /* set min-width, allow images to set cell width */
  min-width: 150px;
  max-width: 100%;
  margin-right: 10px;
  /* vertically center */
  top: 50%;
  transform: translateY(-50%)
}

@media screen and (min-width: 1700px) {
    .carousel-image {
        display: block;
        height: 510px!important;
        /* set min-width, allow images to set cell width */
        min-width: 150px;
        max-width: 100%;
        margin-right: 10px;
        /* vertically center */
        top: 50%;
        transform: translateY(-50%)
    } 
}


.carousel.is-fullscreen .carousel-image {
  height: auto;
  max-height: 100%;
}

</style>
@endsection
