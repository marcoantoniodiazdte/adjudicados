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
                                <span class="hidden-xs">Lista de Obras</span>
                            </h4>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-10 ">
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
                    @foreach($obras as $obra)
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                            <!-- Property start -->
                            <div class="property">
                                <!-- Property img -->
                                <div class="property-img">
                                    @if($obra->tipo_oferta == 'exclusiva')
                                    <div style="background:red;" class="property-tag button alt featured">Oferta</div>
                                @endif
                                @if( Auth::user() && $obra->isOffer() == false && App\Company::info()->crm && Auth::user()->hasVerifiedEmail() )
                                <div class="property-tag button sale btn-info ofertar"  moneda="{{$obra->moneda}}" monto="{{$obra->monto_oferta}}" data-id="{{$obra->id}}" tipo="obra" modelo="Obra" style="background-color:#ff9800;">Hacer Oferta</div>
                                @elseif ( Auth::user() && $obra->isOffer() == true && App\Company::info()->crm)
                                <a href="/perfil/propiedades">
                                    <div data-toggle="tooltip" title="{{$obra->offer->estado->descripcion}}" class="property-tag button sale "   style="background-color:{{$obra->offer->estado->color}}; color:{{$obra->offer->estado->color_letra}}">{{$obra->offer->estado->nombre}}</div>
                                </a>
                                @else
                                @endif
                                @if($obra->tipo_oferta == 'exclusiva')
                                <div class="property-price button"> <p style="color:white; margin: -5px;" usd="{{$obra->precio_oferta_usd}}" class="price"  eur="{{$obra->precio_oferta_eu}}" dop="{{$obra->precio_oferta}}"> {{$obra->moneda}}$ {{number_format($obra->monto_oferta)}}</p></div>
                                @else
                                <div class="property-price button"> <p style="color:white; margin: -5px;" usd="{{$obra->precio_usd}}" class="price" dop="{{$obra->precio}}" eur="{{$obra->precio_eu}}"> {{$obra->moneda}}$ {{number_format($obra->monto)}}</p></div>
                                @endif
                                    @if(count($obra->archivos) > 0)
                                    <img src="/obra/abrirImagen/{{$obra->archivos[0]->id}}" style="width:350px!important; height: 231px;" alt="fp" class="img-responsive">
                                    @else
                                    <img src="https://cdn11.bigcommerce.com/s-gk06t3dnh9/stencil/e6196740-c8f0-0137-e35e-0242ac110024/icons/icon-no-image.svg" style="width:350px!important; height: 231px;"  alt="fp" class="img-responsive">
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
                                    <div class="col-md-10"> 
                                        <!-- title -->
                                        <h1 class="title">
                                            <a href="/obra/{{$obra->id}}">{{$obra->titulo}}</a>
                                        </h1>
                                    </div>
                                    <div class="col-md-2">
                                        @if(Auth::user())
                                            @if($obra->isFavorite() && App\Company::info()->gestion_usuarios)
                                                <i  data-id="{{$obra->id}}" tipo="obra" modelo="obra" class="fa fa-star star-checked" style="font-size: x-large;"></i>
                                            @else
                                                <i data-id="{{$obra->id}}" tipo="obra" modelo="obra" class="fa fa-star" style="color:darkgrey; font-size: x-large;"></i>
                                            @endif
                                        @endif
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
                <!-- Search contents sidebar start -->
                {{-- <div class="sidebar-widget hidden-xs hidden-sm">
                    <div class="main-title-2">
                        <h1><span>Busqueda</span> Avanzada</h1>
                    </div>

                    <form method="GET">

                        <div class="form-group">
                            <select class="selectpicker search-fields" data-live-search="true" name="location"  >
                                <option>Marca</option>
                                <option>Toyota</option>
                                <option>Honda</option>
                                <option>Subaru</option>
                                <option>Kia</option>
                                <option>Mercedes Benz</option>
                                <option>Ford</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="selectpicker search-fields" name="property-types">
                                <option>Año</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                            </select>
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


                        <div class="form-group mb-0">
                            <button class="search-button">Buscar</button>
                        </div>
                    </form>
                </div> --}}

                  <!-- Popular posts start -->
                  <div class="sidebar-widget popular-posts">
                    <div class="main-title-2">
                        <h1><span>Obras</span> recientes</h1>
                    </div>
                    @foreach($recientes as $obr)
                        <div class="media">
                            <div class="media-left">
                                @if(count($obr->archivos) > 0)
                                    <img class="media-object" width="75" style="height:65px;" src="/obra/abrirImagen/{{$obr->archivos[0]->id}}" alt="small-properties-1">
                                @else
                                    <img class="media-object" width="75" src="">
                                @endif
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="/obra/{{$obr->id}}">{{$obr->titulo}}</a>
                                </h3>
                                <p> 27 de Febrero, 2018</p>
                                <div class="price" usd="{{$obr->precio_usd}}"  dop="{{$obr->precio}}" eur="{{$obr->precio_eu}}" >
                                    {{$obr->moneda}}$ {{number_format($obr->monto, 2)}}
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