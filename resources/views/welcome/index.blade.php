@extends('welcome.layouts.layout')

@section('content')
<!-- Banner start -->
<div class="banner">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item item-100vh active">
                <img src="https://elsolweb.tv/wp-content/uploads/2019/09/condominio1.jpg" alt="banner-slider-1" class="img-responsive">
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
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="form-group">
                                                            <div class="range-slider">
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
                        <div class="banner-search-box hidden-xs hidden-sm" style="margin-top: -85px!important;">
                            <!-- Search area start -->
                            <div class="search-area animated fadeInDown delay-1s" style="background: transparent;">
                                <div class="search-area-inner">
                                    <div class="panel-box properties-panel-box Property-description">
                                        <ul class="nav nav-tabs " style="display:flex; justify-content:center;">
                                            {{-- <li class="active"><a href="#tab1default" data-toggle="tab" aria-expanded="true">Bienes Raices</a></li> --}}
                                            <li class="active"><a href="#tab1default" data-toggle="tab" aria-expanded="true">BIENES RAICES</a></li>
                                            <li class=""><a href="#tab2default" data-toggle="tab" aria-expanded="false">VEHICULOS</a></li>
                                            {{-- <li class=""><a href="#tab2default" data-toggle="tab" aria-expanded="false">EQUIPOS</a></li> --}}
                                            <li class=""><a href="#tab3default" data-toggle="tab" aria-expanded="false">OBRAS DE ARTE</a></li>
                                            <li class=""><a href="#tab4default" data-toggle="tab" aria-expanded="false">EQUIPOS</a></li>
                                            {{-- <li class=""><a href="#tab4default" data-toggle="tab" aria-expanded="false">Floor Plans</a></li> --}}
                                            {{-- <li class=""><a href="#tab5default" data-toggle="tab" aria-expanded="false">Video</a></li> --}}
                                        </ul>
                                        <div class="panel with-nav-tabs panel-default ">
                                            <div class="panel-body">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade active in" id="tab1default">
                                                        <div class="search-contents ">
                                                            <form method="POST" action="propiedades/buscar">
                                                            @csrf
                                              
                                                                
                                                    
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                    <div class="form-group">
                                                                        <span class="pull-left">Tipo:</span>
                                                                        <select class="form-control search-fields" style="text-align: left;" style="color:#989898;" id="venta" name="estado_comercial[]" multiple="multiple">
                                                                            <option style="text-align: left;" value="venta">Comprar</option>
                                                                            <option style="text-align: left;" value="alquiler">Alquilar</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                    <div class="form-group">
                                                                        <span class="pull-left">Zona:</span>
                                                                        <select class="form-control search-fields" style="color:#989898;" name="zona_id[]"  id="zona" multiple="multiple"  data-live-search-placeholder="Busqueda">
                                                                            @foreach($zonas as $zona)
                                                                                <option class="pull-left" value="{{$zona->id}}">{{$zona->zona}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                    <div class="form-group">
                                                                        <span class="pull-left">Provincia:</span>
                                                                        <select class="form-control search-fields" style="color:#989898;" name="provincia_id[]"  id="provincia" multiple="multiple"  data-live-search-placeholder="Busqueda">
                                                                            {{-- @foreach($provincias as $provincia)
                                                                                <option class="pull-left" value="{{$provincia->provincia_id}}">{{$provincia->provincia}}</option>
                                                                            @endforeach --}}
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                    <div class="form-group">
                                                                        <span class="pull-left">Municipio:</span>
                                                                        <select class="form-control search-fields" style="color:#989898;" name="municipio_id[]" id="municipio"  multiple='multiple' data-live-search-placeholder="Busqueda">  
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                    <div class="form-group">
                                                                        <span class="pull-left">Sector:</span>
                                                                        <select class="form-control search-fields" style="color:#989898;" id="sector" name="sector_id[]" multiple="multiple" data-live-search-placeholder="Busqueda">
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                    <div class="form-group">
                                                                        <span class="pull-left">Tipo:</span>    
                                                                        <select class="form-control search-fields" style="color:#989898;" name="tipo_id[]"  multiple="multiple" id="tipo"  data-live-search-placeholder="Busqueda">
                                                                            @foreach($tipo_propiedades as $tipo)
                                                                                <option class="" style="width:100%;" value="{{$tipo->id}}">{{$tipo->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                    <div class="form-group">
                                                                        <span class="pull-left" for="">Habitaciones</span>
                                                                        <select class="form-control search-fields" style="color:#989898;" name="habitaciones[]"  multiple="multiple" id="bedroom"  data-live-search-placeholder="Busqueda" >
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
                                                                        <span class="pull-left" for="">Baños</span>
                                                                        <select class="form-control search-fields" style="color:#989898;" name="banos[]"  multiple="multiple" id="bathroom" data-live-search-placeholder="Busqueda" >
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
                                                                <div class="col-lg-6 col-md-6 col-sm-12" style="display: flex; margin-top:5px;">
                                                                    <div class="checkbox checkbox-theme checkbox-circle">
                                                                        <input id="checkbox1" type="checkbox" name="oferta" >
                                                                        <label style="font-size:15px; color: white;" for="checkbox1">
                                                                            Mostrar Ofertas
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                                                        <!-- <label class="pull-left" for="">Precio</label> -->
                                                                        <div class="range-slider">
                                                                            <!-- <input type="text" class="js-range-slider" name="my_range" value="" /> -->
                                                                            <input type="text" class="js-range-slider" name="my_range" value=""/>
                                                                        </div>
                                                                </div>
                                                               
                                                                
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                    <div class="form-group mb-0">
                                                                        <button type="submit" class="search-button">Buscar</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade features" id="tab2default">
                                                        <!-- Properties condition start -->
                                                        <div class="search-contents ">
                                                            <form method="POST" action="vehiculos/buscar">
                                                            @csrf
                                              
                                                                
                                                    
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                    <div class="form-group">
                                                                        <span class="pull-left">Marca:</span>
                                                                        <select class="form-control search-fields " style="text-align: left;" style="color:#989898;" id="vehiculo" multiple="multiple" name="marca_id[]" >
                                                                            @foreach($marcas as $marca)
                                                                                <option style="text-align: left;" value="{{$marca->id}}">{{$marca->nombre}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                    <div class="form-group">
                                                                        <span class="pull-left">Año:</span>
                                                                        <select class="form-control search-fields" style="" name="fecha_fabricacion"  id="fecha" multiple="multiple"  data-live-search-placeholder="Busqueda">
                                                                                <option class="pull-left" value="2000">2000</option>
                                                                                <option class="pull-left" value="2001">2001</option>
                                                                                <option class="pull-left" value="2002">2002</option>
                                                                                <option class="pull-left" value="2002">2003</option>
                                                                                <option class="pull-left" value="2004">2004</option>
                                                                                <option class="pull-left" value="2005">2005</option>
                                                                                <option class="pull-left" value="2006">2006</option>
                                                                                <option class="pull-left" value="2007">2007</option>
                                                                                <option class="pull-left" value="2008">2008</option>
                                                                                <option class="pull-left" value="2009">2009</option>
                                                                                <option class="pull-left" value="2010">2010</option>
                                                                                <option class="pull-left" value="2011">2011</option>
                                                                                <option class="pull-left" value="2012">2012</option>
                                                                                <option class="pull-left" value="2013">2013</option>
                                                                                <option class="pull-left" value="2014">2014</option>
                                                                                <option class="pull-left" value="2015">2015</option>
                                                                                <option class="pull-left" value="2016">2016</option>
                                                                                <option class="pull-left" value="2017">2017</option>
                                                                                <option class="pull-left" value="2018">2018</option>
                                                                                <option class="pull-left" value="2019">2019</option>
                                                                                <option class="pull-left" value="2020">2020</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                          
                                                                <div class="col-lg-6 col-md-6 col-sm-12" style="display: flex; margin-top:18px;">
                                                                    <div class="checkbox checkbox-theme checkbox-circle">
                                                                        <input id="checkbox3" type="checkbox">
                                                                        <label style="font-size:15px; color: white;" for="checkbox3">
                                                                            Mostrar Ofertas
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                                                        <!-- <label class="pull-left" for="">Precio</label> -->
                                                                        <div class="range-slider">
                                                                            <!-- <input type="text" class="js-range-slider" name="my_range" value="" /> -->
                                                                            <input type="text" class="js-range-slider" name="my_range" value=""/>
                                                                        </div>
                                                                </div>
                                                               
                                                                
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                    <div class="form-group mb-0">
                                                                        <button type="submit" class="search-button">Buscar</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- Properties condition end -->
                                                    </div>
                                                    <div class="tab-pane fade technical" id="tab3default">
                                                        <!-- Properties amenities start -->
                                                        <div class="search-contents ">
                                                            <form method="POST" action="obras/buscar">
                                                            @csrf
                                              
                                                                
                                                    
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                    <div class="form-group">
                                                                        <span class="pull-left">Tipo de Obras:</span>
                                                                        <select class="form-control search-fields" style="text-align: left;" style="color:#989898;" multiple="multiple" id="obras" name="tipo_id[]" >
                                                                            @foreach($tipoObras as $tipo)
                                                                                <option style="text-align: left;" value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                             
                                                          
                                                                <div class="col-lg-6 col-md-6 col-sm-12" style="display: flex; margin-top:18px;">
                                                                    <div class="checkbox checkbox-theme checkbox-circle">
                                                                        <input id="checkbox2" type="checkbox" name="oferta" >
                                                                        <label style="font-size:15px; color: white;" for="checkbox2">
                                                                            Mostrar Ofertas
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                                                        <!-- <label class="pull-left" for="">Precio</label> -->
                                                                        <div class="range-slider">
                                                                            <!-- <input type="text" class="js-range-slider" name="my_range" value="" /> -->
                                                                            <input type="text" class="js-range-slider" name="my_range" value=""/>
                                                                        </div>
                                                                </div>
                                                               
                                                                
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                    <div class="form-group mb-0">
                                                                        <button type="submit" class="search-button">Buscar</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- Properties amenities end -->
                                                    </div>
                                                    <div class="tab-pane fade technical" id="tab4default">
                                                        <!-- Properties amenities start -->
                                                        <div class="search-contents ">
                                                            <form method="POST" action="equipos/buscar">
                                                            @csrf
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                    <div class="form-group">
                                                                        <span class="pull-left">Tipo de Equipos:</span>
                                                                        <select class="form-control search-fields" style="text-align: left;" style="color:#989898;" multiple="multiple" id="equipos" name="tipo_id[]" >
                                                                            @foreach($tipoEquipos as $tipo)
                                                                                <option style="text-align: left;" value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12" style="display: flex; margin-top:18px;">
                                                                    <div class="checkbox checkbox-theme checkbox-circle">
                                                                        <input id="checkbox5" type="checkbox" name="oferta" >
                                                                        <label style="font-size:15px; color: white;" for="checkbox5">
                                                                            Mostrar Ofertas
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                                                        <!-- <label class="pull-left" for="">Precio</label> -->
                                                                        <div class="range-slider">
                                                                            <!-- <input type="text" class="js-range-slider" name="my_range" value="" /> -->
                                                                            <input type="text" class="js-range-slider" name="my_range" value=""/>
                                                                        </div>
                                                                </div>
                                                               
                                                                
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                    <div class="form-group mb-0">
                                                                        <button type="submit" class="search-button">Buscar</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- Properties amenities end -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                @foreach($propiedades as $propiedad)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1, 2, 3">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            @if($propiedad->tipo_oferta == 'exclusiva')
                            <div class="property-tag button alt featured">OFERTA</div>
                            @endif
                            <div class="property-tag button sale">Venta </div>
                            @if($propiedad->tipo_oferta == 'exclusiva')
                            <div class="property-price">
                                <p style="color: white;font-size: 18px; background: red;" usd="{{$propiedad->precio_oferta_usd}}" class="price" dop="{{$propiedad->precio_oferta_rd}}" eur="{{$propiedad->precio_oferta_eu}}" > RD${{number_format($propiedad->precio_oferta_rd)}}</p>
                            </div>
                            @else
                            <div class="property-price">
                                <p style="color: white;font-size: 18px; background: var(--main-color);" usd="{{$propiedad->precio_us}}" class="price" dop="{{$propiedad->precio_rd}}" eur="{{$propiedad->precio_eur}}"> RD${{number_format($propiedad->precio_rd)}}</p>
                            </div>
                            @endif
                            <div class="property-magnify-gallery">
                                @if(count($propiedad->archivos) > 0)
                                    <img src="/abrirImagen/{{$propiedad->archivos[0]->id}}" style="width:350px!important; height: 231px;" alt="fp" class="img-responsive">
                                @else
                                <img src="https://constructorabisono.com.do/images/Proyectos/CiudadReal/DSC_0238-RT.jpg" style="width:350px!important; height: 231px;"  alt="fp" class="img-responsive">
                                @endif
                            </div>
                            
                            <div class="property-overlay">
                                <a href="" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>

                            </div>
                        </div>
                        <!-- Property content -->
                        <div class="property-content">
                            <!-- title -->
                            <h1 class="title">
                                <a href="/propiedad/{{$propiedad->id}}">{{$propiedad->name}}</a>
                            </h1>
                            <!-- Property address -->
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                    <span>{{$propiedad->area}} mt2</span>
                                </li>
                                <li>
                                    <i class="flaticon-bed"></i>
                                    <span>{{$propiedad->habitaciones}} Hab.</span>
                                </li>
                                <li>
                                    <i class="flaticon-monitor"></i>
                                    <span>TV </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
<!-- Featured properties end -->

{{-- <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'f5cb0f1e-2915-4b61-b327-664a30ac0d4e', f: true }); done = true; } }; })();</script> --}}
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
});

$('#zona').multipleSelect({
    width: 265,
    dropWidth: 200
})

$('#fecha').multipleSelect({
    width: 265,
    dropWidth: 200
})

$('#obras').multipleSelect({
    width: 265,
    dropWidth: 200
})

$('#equipos').multipleSelect({
    width: 265,
    dropWidth: 200
})

$('#provincia').multipleSelect({
    width: 265,
    dropWidth: 200
});

$('#vehiculo').multipleSelect({
    width: 265,
    dropWidth: 200
});

$('#municipio').multipleSelect({
    width: 265
});

$('#sector').multipleSelect({
    width: 265
});

$('#zona').on('change',function(){
    $.post( "/provincias",{data:$(this).val(), '_token': $('meta[name="csrf-token"]').attr('content')}, function( data ) {
        $('provincia').empty();
        $('#sector').empty();
        var $select = $('#provincia').empty();;
        $('#provincia').multipleSelect('destroy');
        $select.multipleSelect('destroy')
        $('#sector').multipleSelect('destroy');
        
        $.each(data,function(key,value){
            console.log(value['provincia']);
            $select.append('<option value=' + value['provincia_id'] + '>' + value['provincia'] + '</option>');
            // $.each(value, function(k,v){
            // })
        });
        $('#provincia').multipleSelect({
            width: 265
        });
        $('#sector').multipleSelect({
            width: 265
        });
        $('#municipio').multipleSelect({
            width: 265
        });
    });
});
    
$('#provincia').on('change',function(){
    $.post( "/municipios",{data:$(this).val(), '_token': $('meta[name="csrf-token"]').attr('content')}, function( data ) {
        $('#sector').empty();
        var $select = $('#municipio').empty();
        $select.multipleSelect('destroy')
        $('#sector').multipleSelect('destroy');
        $('#sector').multipleSelect({
            width: 265
        });
        $.each(data,function(key,value){
            $.each(value, function(k,v){
                $select.append('<option value=' + v['municipio_id'] + '>' + v['municipio'] + '</option>');
            })
        });
        $('#municipio').multipleSelect({
            width: 265
        });
    });
});


$("#municipio").on('change',function(){
    $.post( "/sectores",{data: $(this).val(), '_token': $('meta[name="csrf-token"]').attr('content')}, function( data ) {
        var $select = $('#sector').empty();
        $select.multipleSelect('destroy');
        $.each(data,function(key,value){
            $.each(value, function(k,v){
                $select.append('<option value=' + v['sector_id'] + '>' + v['sector'] + '</option>');
            })
        });
        $('#sector').multipleSelect({
            width: 265
        });
    });
});

</script>

<style>
.ms-parent {
    width: 275px;
}

.property-tag.featured {
    background: red;
    font-size: 16px;
}

.checkbox {
    padding-left: 20px;
    margin: 0px!important;
}

.nav-tabs {
    border-bottom: 1px solid transparent;
    margin-bottom: 5px!important;
}

.banner-search-box .search-fields {
    width: 265px;
    min-height: 0px;
    padding: 0px 0;
    box-shadow: none;
    border: none;
    background-color: rgba(255, 255, 255, 0.2);
}
</style>
@endsection
