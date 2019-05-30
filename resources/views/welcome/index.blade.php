@extends('welcome.layouts.layout')

@section('content')
<!-- Banner start -->
<div class="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item item-100vh active">
                <img src="https://www.residencialmentha.com/images/slider1.jpg" alt="banner-slider-1" class="img-responsive">
                <div class="carousel-caption banner-slider-inner banner-tb text-left">
                    <div class="banner-content banner-content-left">
                        <div class="text-center hidden-md hidden-lg">
                            <h1 data-animation="animated fadeInDown delay-05s"><span>Encuentra la </span> propiedad de tus sueños</h1>
                            
                            <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <select class="form-control" name="area-from" data-live-search="true" data-live-search-placeholder="Busqueda">
                                        <option>Area</option>
                                        <option>1000</option>
                                        <option>800</option>
                                        <option>600</option>
                                        <option>400</option>
                                        <option>200</option>
                                        <option>100</option>
                                    </select>
                                </div>
                            </div>
                   
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <select class="form-control" name="area-from" data-live-search="true" data-live-search-placeholder="Busqueda">
                                        <option>Comprar</option>
                                        <option>Alquilar</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <select class="form-control" name="area-from" data-live-search="true" data-live-search-placeholder="Busqueda">
                                        <option>Ubicación</option>
                                        <option>United States</option>
                                        <option>United Kingdom</option>
                                        <option>American Samoa</option>
                                        <option>Belgium</option>
                                        <option>Cameroon</option>
                                        <option>Canada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <select class="form-control" name="area-from" data-live-search="true" data-live-search-placeholder="Busqueda">
                                        <option>Apartamento</option>
                                        <option>Casa</option>
                                        <option>Villa</option>
                                        <option>Edificio</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <select class="form-control" name="area-from" data-live-search="true" data-live-search-placeholder="Busqueda">
                                        <option>Habitaciones</option>
                                        <option>1+ habitaciones</option>
                                        <option>2+ habitaciones</option>
                                        <option>3+ habitaciones</option>
                                        <option>4+ habitaciones</option>
                                        <option>5+ habitaciones</option>
                                        <option>6+ habitaciones</option>
                                        <option>7+ habitaciones</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <select class="form-control" name="area-from" data-live-search="true" data-live-search-placeholder="Busqueda">
                                        <option>Baños</option>
                                        <option>1+ baños</option>
                                        <option>2+ baños</option>
                                        <option>3+ baños</option>
                                        <option>4+ baños</option>
                                        <option>5+ baños</option>
                                        <option>6+ baños</option>
                                        <option>7+ baños</option>
                                    </select>
                                </div>
                            </div>                                   -->

                            <div class="search-area">
                                <div class="container">
                                    <div class="search-area-inner">
                                        <div class="search-contents ">
                                            <form method="GET">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                        <div class="form-group">
                                                            <select class="selectpicker search-fields" name="area-from" data-live-search="true" data-live-search-placeholder="Search value">
                                                                <option>Area From</option>
                                                                <option>1000</option>
                                                                <option>800</option>
                                                                <option>600</option>
                                                                <option>400</option>
                                                                <option>200</option>
                                                                <option>100</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                        <div class="form-group">
                                                            <select class="selectpicker search-fields" name="property-status" data-live-search="true" data-live-search-placeholder="Search value">
                                                                <option>Property Status</option>
                                                                <option>Venta</option>
                                                                <option>For Rent</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
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
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                        <div class="form-group">
                                                            <select class="selectpicker search-fields" name="property-types" data-live-search="true" data-live-search-placeholder="Search value">
                                                                <option>Property Types</option>
                                                                <option>Residential</option>
                                                                <option>Commercial</option>
                                                                <option>Land</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                        <div class="form-group">
                                                            <select class="selectpicker search-fields" name="bedrooms" data-live-search="true" data-live-search-placeholder="Search value" >
                                                                <option>Bedrooms</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                        <div class="form-group">
                                                            <select class="selectpicker search-fields" name="bathrooms" data-live-search="true" data-live-search-placeholder="Search value" >
                                                                <option>Bathrooms</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                        <div class="form-group">
                                                            <div class="range-slider">
                                                                <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                                        <div class="form-group">
                                                            <button class="search-button">Search</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              <a href="#" class="btn button-md button-theme" data-animation="animated fadeInUp delay-15s">Buscar</a>
                            <!-- <a href="#" class="btn button-md border-button-theme" data-animation="animated fadeInUp delay-15s">Learn More</a>  -->
                        </div>

                        <div class="banner-search-box hidden-xs hidden-sm">
                            <!-- Search area start -->
                            <div class="search-area animated fadeInDown delay-1s">
                                <div class="search-area-inner">
                                    <div class="search-contents ">
                                        <form method="GET">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <select class="form-control search-fields" style="color:#989898;" name="area-from"  data-live-search-placeholder="Busqueda">
                                                        <option>Inmobiliaria</option>
                                                        <option>Euro-Dom</option>
                                                        <option>Remax</option>
                                                        <option>Garrido</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <select class="form-control search-fields" style="color:#989898;"style="color:#989898;">
                                                        <option>Comprar</option>
                                                        <option>Alquilar</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <select class="form-control search-fields" style="color:#989898;" name="location"  data-live-search-placeholder="Busqueda">
                                                        <option>Ubicación</option>
                                                        <option>United States</option>
                                                        <option>United Kingdom</option>
                                                        <option>American Samoa</option>
                                                        <option>Belgium</option>
                                                        <option>Cameroon</option>
                                                        <option>Canada</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <select class="form-control search-fields" style="color:#989898;"  data-live-search-placeholder="Busqueda">
                                                        <option>Apartamento</option>
                                                        <option>Casa</option>
                                                        <option>Villa</option>
                                                        <option>Edificio</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <select class="form-control search-fields" style="color:#989898;" name="bedrooms"  data-live-search-placeholder="Busqueda" >
                                                        <option>Habitaciones</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group ">
                                                    <select class="form-control search-fields" style="color:#989898;" name="bathrooms"  data-live-search-placeholder="Busqueda" >
                                                        <option>Baños</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="row">
                                                    <div class="col-lg-12" style="">
                                                        <div class="btn-group bootstrap-select search-fields">
                                                            <button type="button" class="btn btn-default dropdown-toggle" style="text-align: start;" data-toggle="dropdown">Tipo Inmueble  <span class="caret"></span></button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="small" style="padding:1px;" data-value="option1" tabIndex="-1"><input type="checkbox"/>&nbsp;Apartamento</a></li>
                                                                <li><a class="small" style="padding:1px;" data-value="option2" tabIndex="-1"><input type="checkbox"/>&nbsp;Casas</a></li>
                                                                <li><a class="small" style="padding:1px;" data-value="option3" tabIndex="-1"><input type="checkbox"/>&nbsp;Hoteles</a></li>
                                                                <li><a class="small" style="padding:1px;" data-value="option4" tabIndex="-1"><input type="checkbox"/>&nbsp;Edificio</a></li>
                                                                <li><a class="small" style="padding:1px;" data-value="option5" tabIndex="-1"><input type="checkbox"/>&nbsp;Fincas</a></li>
                                                                <li><a class="small" style="padding:1px;" data-value="option6" tabIndex="-1"><input type="checkbox"/>&nbsp;Locales</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>    
                                            </div>                                           
                                            
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group mb-0">
                                                    <button class="search-button">Buscar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Search area start -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- Banner end -->

<!-- Featured properties start -->
<div class="content-area featured-properties">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Propiedades destacadas</h1>
        </div>
        <!-- <ul class="list-inline-listing filters filters-listing-navigation">
            <li class="active btn filtr-button filtr" data-filter="all">Todas</li>
            <li data-filter="1" class="btn btn-inline filtr-button filtr">Casas</li>
            <li data-filter="2" class="btn btn-inline filtr-button filtr">Oficinas</li>
            <li data-filter="3" class="btn btn-inline filtr-button filtr">Apartamentos</li>
            <li data-filter="4" class="btn btn-inline filtr-button filtr">Residenciales</li>
        </ul> -->
        <div class="row">
            <div class="filtr-container">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1, 2, 3">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">destacada</div>
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
                                <a href="properties-details.html">Juan Dolio</a>
                            </h1>
                            <!-- Property address -->
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
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1">
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
                                <a href="properties-details.html">Modern Family Home</a>
                            </h1>
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
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="2, 3">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Destacada</div>
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
                                <a href="properties-details.html">Sweet Family Home</a>
                            </h1>
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

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="3, 4">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">destacada</div>
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
                                <a href="properties-details.html">Big Head House</a>
                            </h1>
                            <!-- Property address -->
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
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="4">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">destacada</div>
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
                         
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">destacada</div>
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
                                <a href="properties-details.html">Masons Villas</a>
                            </h1>

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
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured properties end -->
<script>
var options = [];

$( '.dropdown-menu a' ).on( 'click', function( event ) {

   var $target = $( event.currentTarget ),
       val = $target.attr( 'data-value' ),
       $inp = $target.find( 'input' ),
       idx;

   if ( ( idx = options.indexOf( val ) ) > -1 ) {
      options.splice( idx, 1 );
      setTimeout( function() { $inp.prop( 'checked', false ) }, 0);
   } else {
      options.push( val );
      setTimeout( function() { $inp.prop( 'checked', true ) }, 0);
   }

   $( event.target ).blur();
      
   console.log( options );
   return false;
});
</script>
@endsection
