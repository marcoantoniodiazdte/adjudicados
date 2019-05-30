@extends('welcome.layouts.layout')

@section('content')
<!-- Properties section start -->
<div class="properties-section" style="padding: 22px 0 70px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-xs-12 col-md-push-4">
                <!-- Option bar start -->
                <div class="option-bar">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-2">
                            <h4>
                                <span class="heading-icon">
                                    <i class="fa fa-th-large"></i>
                                </span>
                                <span class="hidden-xs">Lista de Propiedades</span>
                            </h4>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10 cod-pad">
                            <div class="sorting-options">
                                <select class="sorting">
                                    <option>Mas recientes</option>
                                    <option>Mas antiguas</option>
                                </select>
                                <a href="properties-list-leftside.html" class="change-view-btn"><i class="fa fa-th-list"></i></a>
                                <a href="properties-grid-leftside.html" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Option bar end -->
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                        <!-- Property start -->
                        <div class="property">
                            <!-- Property img -->
                            <div class="property-img">
                                <div class="property-tag button alt featured">Destacada</div>
                                <div class="property-tag button sale">Alquiler</div>
                                <div class="property-price">$150,000</div>
                                <img src="http://placehold.it/360x240" alt="fp" class="img-responsive">
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Lexus GS F">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="http://placehold.it/750x540" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Juan Dolio</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 mt2</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3 Hab.</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span> 2 Baños </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1 Garage</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-building"></i>
                                        <span> 3 Balcony</span>
                                    </li>
                                </ul>
                                <div class="property-footer">
                                    <span class="left">
                                        <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                                    </span>
                                    <span class="right">
                                        <i class="fa fa-calendar"></i>Hace 5 dias
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Property end -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                        <!-- Property start -->
                        <div class="property">
                            <!-- Property img -->
                            <div class="property-img">
                                <div class="property-tag button alt featured">Destacada</div>
                                <div class="property-tag button sale">Alquiler</div>
                                <div class="property-price">$150,000</div>
                                <img src="http://placehold.it/360x240" alt="fp" class="img-responsive">
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Lexus GS F">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="http://placehold.it/750x540" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Beautiful Single Home</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 mt2</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3 Hab.</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span> 2 Baños </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1 Garage</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-building"></i>
                                        <span> 3 Balcony</span>
                                    </li>
                                </ul>
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left">
                                        <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                                    </span>
                                    <span class="right">
                                        <i class="fa fa-calendar"></i>Hace 5 dias
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Property end -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                        <!-- Property start -->
                        <div class="property">
                            <!-- Property img -->
                            <div class="property-img">
                                <div class="property-tag button alt featured">Destacada</div>
                                <div class="property-tag button sale">Alquiler</div>
                                <div class="property-price">$150,000</div>
                                <img src="http://placehold.it/360x240" alt="fp" class="img-responsive">
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Lexus GS F">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="http://placehold.it/750x540" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Sweet Family Home</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 mt2</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3 Hab.</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span> 2 Baños </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1 Garage</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-building"></i>
                                        <span> 3 Balcony</span>
                                    </li>
                                </ul>
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left">
                                        <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                                    </span>
                                    <span class="right">
                                        <i class="fa fa-calendar"></i>Hace 5 dias
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Property end -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                        <!-- Property start -->
                        <div class="property">
                            <!-- Property img -->
                            <div class="property-img">
                                <div class="property-tag button alt featured">Destacada</div>
                                <div class="property-tag button sale">Alquiler</div>
                                <div class="property-price">$150,000</div>
                                <img src="http://placehold.it/360x240" alt="fp" class="img-responsive">
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Lexus GS F">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="http://placehold.it/750x540" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Park Avenue</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 mt2</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3 Hab.</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span> 2 Baños </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1 Garage</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-building"></i>
                                        <span> 3 Balcony</span>
                                    </li>
                                </ul>
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left">
                                        <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                                    </span>
                                    <span class="right">
                                        <i class="fa fa-calendar"></i>Hace 5 dias
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Property end -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                        <!-- Property start -->
                        <div class="property">
                            <!-- Property img -->
                            <div class="property-img">
                                <div class="property-tag button alt featured">Destacada</div>
                                <div class="property-tag button sale">Alquiler</div>
                                <div class="property-price">$150,000</div>
                                <img src="http://placehold.it/360x240" alt="fp" class="img-responsive">
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Lexus GS F">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="http://placehold.it/750x540" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Big Head House</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 mt2</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3 Hab.</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span> 2 Baños </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1 Garage</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-building"></i>
                                        <span> 3 Balcony</span>
                                    </li>
                                </ul>
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left">
                                        <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                                    </span>
                                    <span class="right">
                                        <i class="fa fa-calendar"></i>Hace 5 dias
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Property end -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                        <!-- Property start -->
                        <div class="property">
                            <!-- Property img -->
                            <div class="property-img">
                                <div class="property-tag button alt featured">Destacada</div>
                                <div class="property-tag button sale">Alquiler</div>
                                <div class="property-price">$150,000</div>
                                <img src="http://placehold.it/360x240" alt="fp" class="img-responsive">
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Lexus GS F">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="http://placehold.it/750x540" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Masons Villas</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 mt2</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3 Hab.</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span> 2 Baños </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1 Garage</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-building"></i>
                                        <span> 3 Balcony</span>
                                    </li>
                                </ul>
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left">
                                        <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                                    </span>
                                    <span class="right">
                                        <i class="fa fa-calendar"></i>Hace 5 dias
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Property end -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                        <!-- Property start -->
                        <div class="property">
                            <!-- Property img -->
                            <div class="property-img">
                                <div class="property-tag button alt featured">Featured</div>
                                <div class="property-tag button sale">Venta</div>
                                <div class="property-price">$150,000</div>
                                <img src="http://placehold.it/360x240" alt="fp" class="img-responsive">
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Lexus GS F">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="http://placehold.it/750x540" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Park Avenue</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 mt2</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3 Hab.</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span> 2 Baños </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1 Garage</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-building"></i>
                                        <span> 3 Balcony</span>
                                    </li>
                                </ul>
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left">
                                        <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                                    </span>
                                    <span class="right">
                                        <i class="fa fa-calendar"></i>Hace 5 dias
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Property end -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                        <!-- Property start -->
                        <div class="property">
                            <!-- Property img -->
                            <div class="property-img">
                                <div class="property-tag button alt featured">Featured</div>
                                <div class="property-tag button sale">Alquiler</div>
                                <div class="property-price">$150,000</div>
                                <img src="http://placehold.it/360x240" alt="fp" class="img-responsive">
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Lexus GS F">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="http://placehold.it/750x540" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Sweet Family Home</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 mt2</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3 Hab.</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span> 2 Baños </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1 Garage</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-building"></i>
                                        <span> 3 Balcony</span>
                                    </li>
                                </ul>
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left">
                                        <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                                    </span>
                                    <span class="right">
                                        <i class="fa fa-calendar"></i>Hace 5 dias
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Property end -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                        <!-- Property start -->
                        <div class="property">
                            <!-- Property img -->
                            <div class="property-img">
                                <div class="property-tag button alt featured">Featured</div>
                                <div class="property-tag button sale">Alquiler</div>
                                <div class="property-price">$150,000</div>
                                <img src="http://placehold.it/360x240" alt="fp" class="img-responsive">
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Lexus GS F">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="http://placehold.it/750x540" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Park Avenue</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 mt2</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3 Hab.</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span> 2 Baños </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1 Garage</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-building"></i>
                                        <span> 3 Balcony</span>
                                    </li>
                                </ul>
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left">
                                        <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                                    </span>
                                    <span class="right">
                                        <i class="fa fa-calendar"></i>Hace 5 dias
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Property end -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                        <!-- Property start -->
                        <div class="property">
                            <!-- Property img -->
                            <div class="property-img">
                                <div class="property-tag button alt featured">Featured</div>
                                <div class="property-tag button sale">Alquiler</div>
                                <div class="property-price">$150,000</div>
                                <img src="http://placehold.it/360x240" alt="fp" class="img-responsive">
                                <div class="property-overlay">
                                    <a href="properties-details.html" class="overlay-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="overlay-link property-video" title="Lexus GS F">
                                        <i class="fa fa-video-camera"></i>
                                    </a>
                                    <div class="property-magnify-gallery">
                                        <a href="http://placehold.it/750x540" class="overlay-link">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                        <a href="http://placehold.it/750x540" class="hidden"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Property content -->
                            <div class="property-content">
                                <!-- title -->
                                <h1 class="title">
                                    <a href="properties-details.html">Sweet Family Home</a>
                                </h1>
                                <!-- Property address -->
                                <h3 class="property-address">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                    </a>
                                </h3>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 mt2</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3 Hab.</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>
                                        <span>TV </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span> 2 Baños </span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1 Garage</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-building"></i>
                                        <span> 3 Balcony</span>
                                    </li>
                                </ul>
                                <!-- Property footer -->
                                <div class="property-footer">
                                    <span class="left">
                                        <a href="#"><i class="fa fa-user"></i>Jhon Doe</a>
                                    </span>
                                    <span class="right">
                                        <i class="fa fa-calendar"></i>Hace 5 dias
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Property end -->
                    </div>
                </div>

                <!-- Page navigation start -->
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="properties-grid-rightside.html" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                            </a>
                        </li>
                        <li><a href="properties-grid-rightside.html">1 <span class="sr-only">(current)</span></a></li>
                        <li class="active"><a href="properties-grid-leftside.html">2</a></li>
                        <li><a href="properties-grid-fullwidth.html">3</a></li>
                        <li>
                            <a href="properties-grid-fullwidth.html" aria-label="Next">
                                <span aria-hidden="true">»</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- Page navigation end-->
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 col-md-pull-8">
                <!-- Search contents sidebar start -->
                <div class="sidebar-widget hidden-xs hidden-sm">
                    <div class="main-title-2">
                        <h1><span>Busqueda</span> Avanzada</h1>
                    </div>

                    <form method="GET">
                        <div class="form-group">
                            <select class="selectpicker search-fields" name="property-status"  >
                                <!-- <option>Property Status</option> -->
                                <option>Venta</option>
                                <option>Alquiler</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="selectpicker search-fields" data-live-search="true" name="location"  >
                                <option>Ubicación</option>
                                <option>Naco</option>
                                <option>Piantini</option>
                                <option>Av. 27 de Febrero</option>
                                <option>Defillo</option>
                                <option>Los Mina</option>
                                <option>Las Americas</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="selectpicker search-fields" name="property-types">
                                <option>Tipo Inmueble</option>
                                <option>Apartamento</option>
                                <option>Casa</option>
                                <option>Edificio</option>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="bedrooms">
                                        <option>Habitaciones</option>
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
                                        <option>Baños</option>
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
                                    <select class="selectpicker search-fields" name="garage">
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

                        <!-- <div class="range-slider">
                            <label>Area</label>
                            <div data-min="0" data-max="10000" data-unit="mt2" data-min-name="min_area" data-max-name="max_area" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="range-slider">
                            <label>Price</label>
                            <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                            <div class="clearfix"></div>
                        </div> -->

                        <a class="show-more-options" data-toggle="collapse" data-target="#options-content">
                            <i class="fa fa-plus-circle"></i> Mostrar mas opciones
                        </a>
                        <div id="options-content" class="collapse">
                            <label class="margin-t-10">Características</label>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">
                                    Parqueos Libres
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox2" type="checkbox">
                                <label for="checkbox2">
                                    Aire acondicionado
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox4" type="checkbox">
                                <label for="checkbox4">
                                    Piscina
                                </label>
                            </div>
            
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox8" type="checkbox">
                                <label for="checkbox8">
                                    Alarma
                                </label>
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <button class="search-button">Buscar</button>
                        </div>
                    </form>
                </div>

                <!-- Category posts start -->
                <div class="sidebar-widget category-posts">
                    <div class="main-title-2">
                        <h1><span>categorías</span> populares</h1>
                    </div>
                    <ul class="list-unstyled list-cat">
                        <li><a href="#">Casas</a> <span>(45)  </span></li>
                        <li><a href="#">Apartmentamento  </a> <span>(21)  </span></li>
                        <li><a href="#">Condominio </a> <span>(23)  </span></li>
                        <li><a href="#">Villa </a> <span>(19)  </span></li>
                        <li><a href="#">Otros  </a> <span>(22)  </span></li>
                    </ul>
                </div>

                <!-- Popular posts start -->
                <div class="sidebar-widget popular-posts">
                    <div class="main-title-2">
                        <h1><span>Propiedades</span> recientes</h1>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <img class="media-object" src="http://placehold.it/90x63" alt="small-properties-1">
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">
                                <a href="properties-details.html">Juan Dolio</a>
                            </h3>
                            <p> 27 de Febrero, 2018</p>
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
                                <a href="properties-details.html">Juan Dolio</a>
                            </h3>
                            <p> 27 de Febrero, 2018</p>
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
                                <a href="properties-details.html">Apartamento para soltero</a>
                            </h3>
                            <p> 27 de Febrero, 2018</p>
                            <div class="price">
                                $734,000
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Helping box Start -->
                <!-- <div class="sidebar-widget helping-box clearfix">
                    <div class="main-title-2">
                        <h1><span>Helping</span> Center</h1>
                    </div>
                    <div class="helping-center">
                        <div class="icon"><i class="fa fa-map-marker"></i></div>
                        <h4>Address</h4>
                        <p>123 Kathal St. Tampa City,</p>
                    </div>
                    <div class="helping-center">
                        <div class="icon"><i class="fa fa-phone"></i></div>
                        <h4>Phone</h4>
                        <p><a href="tel:+55-417-634-7071">+55 417 634 7071</a> </p>
                    </div>
                </div> -->

            </div>
        </div>
    </div>
</div>
<!-- Properties section end -->
@endsection