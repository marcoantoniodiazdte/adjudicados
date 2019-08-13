@extends('welcome.layouts.layout')

@section('content')
<!-- Banner start -->
<div class="banner">
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
                        <div class="banner-search-box hidden-xs hidden-sm">
                            <!-- Search area start -->
                            <div class="search-area animated fadeInDown delay-1s">
                                <div class="search-area-inner">
                                    <div class="search-contents ">
                                        <form method="GET">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <span class="pull-left">Inmobiliaria:</span>
                                                    <!-- <select class="form-control search-fields" style="color:#989898;" name="area-from"  data-live-search-placeholder="Busqueda">
                                                        @foreach($inmobiliarias as $inmobiliaria)
                                                        <option value="{{$inmobiliaria->id}}" >{{$inmobiliaria->name}}</option>
                                                        @endforeach
                                                    </select> -->
                                                    <select class="form-control search-fields " multiple="multiple" id="inmobiliaria">
                                                        @foreach($inmobiliarias as $inmobiliaria)
                                                            <option class="pull-left" value="{{$inmobiliaria->id}}" >{{$inmobiliaria->name}}</option>
                                                        @endforeach
                                                    </select>
                                                   
                                                </div>
                                            </div>
                                            
                                
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <span class="pull-left">Tipo:</span>
                                                    <select class="form-control search-fields" style="text-align: left;" style="color:#989898;" id="venta" multiple="multiple">
                                                        <option style="text-align: left;">Comprar</option>
                                                        <option style="text-align: left;">Alquilar</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <span class="pull-left">Provincia:</span>
                                                    <select class="form-control search-fields" style="color:#989898;" name="location"  id="provincia" multiple="multiple"  data-live-search-placeholder="Busqueda">
                                                        @foreach($provincias as $provincia)
                                                            <option class="pull-left" value="{{$provincia->provincia_id}}">{{$provincia->provincia}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <span class="pull-left">Municipio:</span>
                                                    <select class="form-control search-fields" style="color:#989898;" name="location" id="municipio"  multiple='multiple' data-live-search-placeholder="Busqueda">  
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <span class="pull-left">Sector:</span>
                                                    <select class="form-control search-fields" style="color:#989898;" id="sector" name="location" multiple="multiple" data-live-search-placeholder="Busqueda">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <span class="pull-left">Tipo:</span>    
                                                    <select class="form-control search-fields" style="color:#989898;"  multiple="multiple" id="tipo"  data-live-search-placeholder="Busqueda">
                                                        @foreach($tipo_propiedades as $tipo)
                                                            <option class="" style="width:100%;" value="{{$tipo->id}}">{{$tipo->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                    <label class="pull-left" for="">Habitaciones</label>
                                                    <select class="form-control search-fields" style="color:#989898;" name="bedrooms"  multiple="multiple" id="bedroom"  data-live-search-placeholder="Busqueda" >
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
                                                    <label class="pull-left" for="">Baños</label>
                                                    <select class="form-control search-fields" style="color:#989898;" name="bathrooms"  multiple="multiple" id="bathroom" data-live-search-placeholder="Busqueda" >
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
                            <div class="property-tag button alt featured">destacada</div>
                            <div class="property-tag button sale">Venta</div>
                            <div class="property-price">
                                <p usd="{{$propiedad->precio_us}}" class="price" dop="{{$propiedad->precio_rd}}" eur="{{$propiedad->precio_us}}"> RD${{number_format($propiedad->precio_rd)}}</p>
                            </div>
                            <img src="http://placehold.it/360x240" alt="fp" class="img-responsive">
                            <div class="property-overlay">
                                <a href="" class="overlay-link">
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
                                <a href="">{{$propiedad->name}}</a>
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
                @endforeach

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
});

$('#provincia').multipleSelect({
    width: 265,
    dropWidth: 200
});
$('#municipio').multipleSelect({
    width: 265
});
$('#sector').multipleSelect({
    width: 265
});

    
$('#provincia').on('change',function(){
    $.get( "/municipios",{data:$(this).val()}, function( data ) {
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
    $.get( "/sectores",{data: $(this).val()}, function( data ) {
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

.banner-search-box .search-fields {
    width: 265px;
    min-height: 40px;
    padding: 4px 0;
    box-shadow: none;
    border: none;
    background-color: rgba(255, 255, 255, 0.2);
}
</style>
@endsection
