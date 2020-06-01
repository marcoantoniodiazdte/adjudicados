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
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-2">
                            <h4>
                                <span class="heading-icon">
                                    <i class="fa fa-th-large"></i>
                                </span>
                                <span class="hidden-xs">Lista de Proyectos Financiados</span>
                            </h4>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-10 ">
                            <div class="sorting-options">
                                <select class="sorting" name="sort" id="sort">
                                    <option value="DESC" {{(isset($_GET['sort']) && $_GET['sort'] == 'DESC' ? 'selected': '')}}>Recientes</option>
                                    <option value="ASC" {{(isset($_GET['sort']) && $_GET['sort'] == 'ASC' ? 'selected': '')}}>Antiguas</option>
                                </select>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Option bar end -->
                <div class="clearfix"></div>

                <div class="row">
                    @foreach($propiedades as $propiedad)
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                            <!-- Property start -->
                            <div class="property">
                                <!-- Property img -->
                                <div class="property-img">
                                @if($propiedad->tipo_oferta == 'exclusiva')
                                    <div style="background:red;" class="property-tag button alt featured">Oferta </div>
                                @endif
                                @if( Auth::user() && $propiedad->isOffer() == false && App\Company::info()->crm && Auth::user()->hasVerifiedEmail()) 
                                <div class="property-tag button sale btn-info ofertar" data-id="{{$propiedad->id}}" tipo="proyecto"  moneda="{{$propiedad->moneda}}" monto="{{$propiedad->monto_oferta}}" modelo="proyecto" style="background-color:#ff9800;">Hacer Oferta</div>
                                @elseif ( Auth::user() && $propiedad->isOffer() == true && App\Company::info()->crm)
                                <a href="/perfil/propiedades">
                                    <div data-toggle="tooltip" title="{{$propiedad->offer->estado->descripcion}}"  class="property-tag button sale "    style="background-color:{{$propiedad->offer->estado->color}}; color:{{$propiedad->offer->estado->color_letra}}">{{$propiedad->offer->estado->nombre}}</div>
                                </a>
                                @else
                                @endif
                                @if($propiedad->tipo_oferta == 'exclusiva')
                                <div class="property-price button"> <p style="color:white; margin: -5px;" class="price" usd="{{$propiedad->precio_oferta_usd}}"  dop="{{$propiedad->precio_oferta_rd}}" eur="{{$propiedad->precio_oferta_eu}}"> {{$propiedad->moneda}}$ {{number_format($propiedad->monto_oferta, 2)}}</p></div>
                                @else
                                <div class="property-price button"> <p style="color:white; margin: -5px;" class="price" usd="{{$propiedad->precio_us}}"  dop="{{$propiedad->precio_rd}}" eur="{{$propiedad->precio_eur}}"> {{$propiedad->moneda}}$ {{number_format($propiedad->monto, 2)}}</p></div>
                                @endif
                                @if(count($propiedad->archivos) > 0)
                                <img src="/proyecto/abrirImagen/{{$propiedad->archivos[0]->id}}" style="width:350px!important; height: 231px;" alt="fp" class="img-responsive">
                                @else
                                <img src="https://constructorabisono.com.do/images/Proyectos/CiudadReal/DSC_0238-RT.jpg" style="width:350px!important; height: 231px;"  alt="fp" class="img-responsive">
                                @endif
                                    {{-- <img src="http://placehold.it/360x240" alt="fp" class="img-responsive"> --}}
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
                                    <div class="row">
                                        <div class="col-md-10">
                                            <h1 class="title">
                                                <a href="/proyecto/{{$propiedad->id}}">{{$propiedad->name}}</a>
                                            </h1>
                                        </div>
                                        <div class="col-md-2">
                                            @if(Auth::user() && App\Company::info()->gestion_usuarios)
                                                @if($propiedad->isFavorite() && App\Company::info()->gestion_usuarios)
                                                    <i  data-id="{{$propiedad->id}}" tipo="proyecto" modelo="proyecto" class="fa fa-star star-checked" style="font-size: x-large;"></i>
                                                @else
                                                    <i data-id="{{$propiedad->id}}" tipo="proyecto" modelo="proyecto" class="fa fa-star" style="color:darkgrey; font-size: x-large;"></i>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Property address -->
                                    <h3 class="property-address">
                                        <a href="">
                                            <i class="fa fa-map-marker"></i>{{$propiedad->direccion}}
                                        </a>
                                    </h3>
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
                                            <i class="flaticon-holidays"></i>
                                            <span> {{$propiedad->banos}} Baños </span>
                                        </li>

                                    </ul>
                                    <div class="property-footer">
                                        <span style="font-size: 14px;" class="right">
                                            <a href="#"><i style="font-size:17px;" class="fa fa-building"></i></i>{{$propiedad->inmobiliaria->nombre}}</a>
                                        </span>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- Property end -->
                        </div>
                    @endforeach
                </div>

                <!-- Page navigation start -->
                {{-- <nav aria-label="Page navigation">
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
                </nav> --}}
                <!-- Page navigation end-->
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 col-md-pull-8">
                {{-- <div class="sidebar-widget hidden-xs hidden-sm">
                    <div class="main-title-2">
                        <h1><span>Busqueda</span> Avanzada</h1>
                    </div>

                    <form method="GET">
                        <div class="form-group">
                            <select class="selectpicker search-fields" name="property-status"  >
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

                        <div class="range-slider">
                            <label>Area</label>
                            <div data-min="0" data-max="10000" data-unit="mt2" data-min-name="min_area" data-max-name="max_area" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="range-slider">
                            <label>Price</label>
                            <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                            <div class="clearfix"></div>
                        </div> 

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
                </div> --}}

                <!-- Popular posts start -->
                <div class="sidebar-widget popular-posts">
                    <div class="main-title-2">
                        <h1><span>Proyectos</span> recientes</h1>
                    </div>
                    @foreach($recientes as $prop)
                        <div class="media">
                            <div class="media-left">
                            @if(count($prop->archivos) > 0)
                                {{-- <img class="media-object" width="75" style="height:65px;" style="height:20px!important;" src="/vehiculo/abrirImagen/{{$car->archivos[0]->id}}" alt="small-properties-1"> --}}
                                <img class="media-object" width="75" style="height:65px;" src="/proyecto/abrirImagen/{{$prop->archivos[0]->id}}" alt="small-properties-1">
                            @else
                                <img class="media-object" width="75" src="">
                            @endif
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="">{{$prop->name}}</a>
                                </h3>
                                <p> 27 de Febrero, 2018</p>
                                <div class="">
                                    <p class="price" usd="{{$prop->precio_oferta_usd}}"  dop="{{$prop->precio_oferta_rd}}" eur="{{$prop->precio_oferta_eu}}">
                                        {{$prop->moneda}}$ {{number_format($prop->monto, 2)}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                   
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
<script>
$('#sort').change(function(){
    // alert($(this).val());
    // return;
    location.href = 'buscar?sort='+$(this).val();
})
</script>
<!-- Properties section end -->
@endsection