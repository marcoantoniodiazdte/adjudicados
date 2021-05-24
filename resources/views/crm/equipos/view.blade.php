@extends('welcome.layouts.layout')

@section('content')
<!-- Properties details page start -->
<div class="content-area properties-details-page">
    <div class="">
        <div class="carousel" data-flickity='{ "fullscreen": true, "lazyLoad": 1, "initialIndex":1}'>
            @foreach($equipo->archivos as $archivo)
                <img class="carousel-image" data-flickity-lazyload="/equipo/abrirImagen/{{$archivo->id}}" />
            @endforeach
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
                        <h3>{{$equipo->titulo}}</h3>
                        <h4>
                            <b>Código: </b>{{$equipo->codigo_referencia}}
                        </h4>
                        {{-- <p>
                            <i class="fa fa-map-marker"></i>{{$vehiculo->titulo}},
                        </p> --}}
                    </div>
                    {{-- <div class="pull-left" style="margin-left: 20px;">
                        <span>Estado:</span>
                        <p>
                        <label class="label label-default">{{strtoupper($equipo->titulo)}}</label>
                        </p>
                    </div> --}}

                    {{-- <div class="pull-left" style="margin-left: 20px;">
                        <span>Entrega:</span>
                        <p>
                            <label class="label label-default">11-03-2020</label>
                        </p>
                    </div> --}}

                    <div class="pull-right">
                    <h3>Precio : <span class="price" usd="{{$equipo->precio_usd}}" dop="{{$equipo->precio}}" eur="{{$equipo->precio_eu}}" >{{$equipo->moneda}}${{number_format($equipo->monto, 2)}}</span></h3>
                    @if($equipo->tipo_oferta == 'exclusiva')
                    <h3>Oferta : <span style="color:red;" class="price" usd="{{$equipo->precio_oferta_usd}}" dop="{{$equipo->monto_oferta}}" eur="{{$equipo->precio_oferta_eu}}">{{$equipo->moneda}}${{number_format($equipo->precio_oferta, 2)}}</span></h3>
                    @endif
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
                            {{-- <li class=""><a href="#tab2default" data-toggle="tab" aria-expanded="false">Condiciones</a></li> --}}
                            {{-- <li class=""><a href="#tab3default" data-toggle="tab" aria-expanded="false">Comodidades</a></li> --}}
                            {{-- <li class=""><a href="#tab4default" data-toggle="tab" aria-expanded="false">Características</a></li> --}}
                            {{-- <li class=""><a href="#tab5default" data-toggle="tab" aria-expanded="false">Video</a></li> --}}
                        </ul>
                        <div class="panel with-nav-tabs panel-default">
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab1default">
                                        <div class="main-title-2">
                                            <h1><span>Descripción</span></h1>
                                        </div>
                                        <p>{{$equipo->descripcion}}</p>
                                    </div>
                                    {{-- <div class="tab-pane fade features" id="tab2default">
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
                                    </div> --}}

                                    {{-- <div class="tab-pane fade" id="tab5default">
                                        <!-- Inside properties start  -->
                                        <div class="inside-properties">
                                            <!-- Main Title 2 -->
                                            <div class="main-title-2">
                                                <h1><span>Video </span></h1>
                                            </div>
                                            <iframe src="https://www.youtube.com/embed/5e0LxrLSzok" allowfullscreen=""></iframe>
                                        </div>
                                        <!-- Inside properties end -->
                                    </div> --}}
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
                                            <input type="text" name="subject" class="input-text" value=" Código de referencia: {{$equipo->codigo_referencia}}" placeholder="Asusto">
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
                            <h4></h4>
                            <p><a href="">{{\App\Company::info()->email}}</a> </p>
                        </div>

                        <div class="helping-center">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h4>Teléfono(s)</h4>
                            <p><a href="tel:+55-417-634-7071">809-243-5198</a> </p>
                            <p><a href="tel:+55-417-634-7071">809-243-3609</a> </p>
                        </div>
                    </div>
                         <!-- Mortgage calculator start -->
                         <div class="sidebar-widget contact-1 mortgage-calculator">
                            <div class="main-title-2">
                                <h1><span><i class="fa fa-calculator"></i> Calculadora  </span>de Préstamos</h1>
                            </div>
                            <div class="contact-form">
                                <form id="agent_form" action="index.html" method="GET" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label">Monto</label>
                                                <input type="number" class="input-text" value="10000" id="principal" placeholder="$87.000">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label">Tasa (%)</label>
                                                <input type="number" class="input-text" value="10" id="interest" placeholder="10%">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label">Periodo del Prestamo en Meses</label>
                                                <input type="number" class="input-text" value="12" id="terms" placeholder="10">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-label">Pago Mensual</label>
                                                <input type="text" class="input-text" disabled id="total">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-0">
                                                <input type="button" value="Calcular" onclick="getValues()" class='search-button' id="">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog" style="width:600px;">
                        
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Tabla de Amortización</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-12">
                                        <div class="col-md-7">
                                            <img src="{{\App\Company::info()->logo}}" style="width: 200px!important; margin-top:9px; "  alt="logo">
                                        </div>
                                        <div class="col-md-5">
                                            <p><b>Monto Préstamo:</b> <span id="lblMonto"></span> </p>
                                            <p><b>Interés:</b> <span id="lblInteres"></span> </p>
                                            <p><b>Cantidad de Meses:</b> <span id="lblCantidad"></span> </p>
                                            <p><b>Total a Pagar:</b> <span id="lblTotal"></span> </p>
                                        </div>
                                        
                                    </div>
                                    <div id="Result"></div>
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                        
                            </div>
                        </div>
                                           
                  

                    <!-- Popular posts start -->
                    <div class="sidebar-widget popular-posts">
                        <div class="main-title-2">
                            <h1><span>Propiedades</span> Recientes</h1>
                        </div>
                        @foreach($recientes as $obr)
                        <div class="media">
                            <div class="media-left">
                                @if(count($obr->archivos) > 0)
                                    <img class="media-object" width="75" style="height:65px;" src="/equipo/abrirImagen/{{$obr->archivos[0]->id}}" alt="small-properties-1">
                                @else
                                    <img class="media-object" width="75" src="">
                                @endif
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="/propiedad/{{$obr->id}}">{{$obr->titulo}}</a>
                                </h3>
                                <p> 27 de Febrero, 2018</p>
                                <div class="price" usd="{{$obr->precio_usd}}"  dop="{{$obr->precio}}" eur="{{$obr->precio_eu}}">
                                    {{$obr->moneda}}$ {{number_format($obr->precio, 2)}}
                                </div>
                            </div>
                        </div>
                    @endforeach
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
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLAT_z9iGIafjfkMjlxv4GfXTkE5tR8jo&callback=initMap"type="text/javascript"></script>
<script>
    function initMap() {
    var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }

    function getValues()
    {
        //button click gets values from inputs
        var balance = parseFloat(document.getElementById("principal").value);
        var interestRate = 
            parseFloat(document.getElementById("interest").value/100.0);
        var terms = parseInt(document.getElementById("terms").value);
        
        //set the div string
        var div = document.getElementById("Result");
        
        //in case of a re-calc, clear out the div!
        div.innerHTML = "";
        
        //validate inputs - display error if invalid, otherwise, display table
        var balVal = validateInputs(balance);
        var intrVal = validateInputs(interestRate);

        if (balVal && intrVal)
        {
            //Returns div string if inputs are valid
            div.innerHTML += amort(balance, interestRate, terms);
        }
        else
        {
            //returns error if inputs are invalid
            div.innerHTML += "Please Check your inputs and retry - invalid values.";
        }
    }


    function amort(balance, interestRate, terms)
    {
        //Calculate the per month interest rate
        var monthlyRate = interestRate/12;
        
        //Calculate the payment
        var payment = balance * (monthlyRate/(1-Math.pow(
            1+monthlyRate, -terms)));
            
        //begin building the return string for the display of the amort table
        // var result = "<div><b>Monto Préstamo</b>: $" + balance.toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2}) +  "<br />" + 
        //     "<b>Interés:</b>" + (interestRate*100).toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2}) +  "%<br />" +
        //     "<b>Cantidad de Meses:</b> " + terms + "<br />" +
        //      "Pafo: $" + payment.toFixed(2) + "<br />" +
        //     "<b>Total a Pagar:</b> $" + (payment * terms).toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2}) + "<br /><br /><div>";
        
        $("#lblMonto").text(balance.toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2}));
        $("#lblInteres").text((interestRate*100).toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2}));
        $("#lblCantidad").text(terms);
        $("#lblTotal").text((payment * terms).toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2}));
            
        //add header row for table to return string
        result = "<table class='table' border='1'><tr><th>#</th><th>Balance</th>" + 
            "<th>Interés</th><th>Capital</th><th>Cuota</th>";
        
        /**
        * Loop that calculates the monthly Loan amortization amounts then adds 
        * them to the return string 
        */
        for (var count = 0; count < terms; ++count)
        { 
            //in-loop interest amount holder
            var interest = 0;
            
            //in-loop monthly principal amount holder
            var monthlyPrincipal = 0;
            
            //start a new table row on each loop iteration
            result += "<tr align=center>";
            
            //display the month number in col 1 using the loop count variable
            result += "<td>" + (count + 1) + "</td>";
            
            
            //code for displaying in loop balance
            result += "<td style='text-align: right;'> $" + balance.toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2}) + "</td>";
            
            //calc the in-loop interest amount and display
            interest = balance * monthlyRate;
            result += "<td style='text-align: right;' > $" + interest.toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2}) + "</td>";
            
            //calc the in-loop monthly principal and display
            monthlyPrincipal = payment - interest;
            result += "<td style='text-align: right;'> $" + monthlyPrincipal.toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2}) + "</td>";

            cuota = payment;
            result += "<td style='text-align: right;'> $" + cuota.toLocaleString(undefined, {minimumFractionDigits: 2, maximumFractionDigits: 2}) + "</td>";
            
            //end the table row on each iteration of the loop	
            result += "</tr>";
            
            //update the balance for each loop iteration
            balance = balance - monthlyPrincipal;		
        }
        
        //Final piece added to return string before returning it - closes the table
        result += "</table>";
        
        //returns the concatenated string to the page
        $("#myModal").modal('show');
        return result;
    }

    function validateInputs(value)
    {
        //some code here to validate inputs
        if ((value == null) || (value == ""))
        {
            return false;
        }
        else
        {
            return true;
        }
    }
</script>
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
