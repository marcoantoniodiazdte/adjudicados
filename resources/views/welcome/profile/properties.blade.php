
@extends('welcome.layouts.layout')
@section('content')
<!-- My Propertiess start -->
<div class="content-area-7 my-properties">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <!-- User account box start -->
                <div class="user-account-box">
                    <div class="content">
                    <ul>
                            <li>
                                <a href="{{route('profile')}}"   >
                                    <i class="flaticon-social"></i>Perfil
                                </a>
                            </li>
                            <li>
                                <a class="active" href="{{route('profile.properties')}}" >
                                    <i class="flaticon-apartment"></i>Mis ofertas
                                </a>
                            </li>
                            <li>
                                <a  href="{{route('profile.favorites')}}">
                                    <i class="fa fa-star"></i>Mis Favoritos
                                </a>
                            </li>
                            <li>
                                <a href="{{route('credenciales')}}">
                                    <i class="flaticon-security"></i>Cambiar Contraseña
                                </a>
                            </li>
                            <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                            Cerrar Sesion</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                            </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- User account box end -->
            </div>

             <div class="col-lg-8 col-md-8 col-sm-12">
                 <div class="main-title-2">
                     <h1><span>Mis</span> Ofertas</h1>
                 </div>
                <!-- table start -->
                <table class="manage-table responsive-table">
                    <tbody>
                        {{-- {{dd($ofertas)}} --}}

                    @foreach($ofertas as $oferta)
                    <tr>
                        <td style="width: 140px;">
                            <img src="{{$oferta['src']}}" alt="my-properties-1" style="height:100px!important;" class="img-responsive hidden-xs">
                            <div style="display: flex; justify-content: space-between;">
                                <a href="">
                                    @if($oferta['favorito'])
                                    <i  data-id="{{$oferta['id']}}" tipo="vehiculo" modelo="Vehiculo" class="fa fa-star star-checked" style="font-size: large;     display: contents;"></i>
                                    @else
                                    <i data-id="{{$oferta['id']}}" tipo="vehiculo" modelo="Vehiculo" class="fa fa-star" style="color:darkgrey; font-size: large;     display: contents;"></i>
                                    @endif
                                </a>
                                <a href="#"> Ver</a>
                            </div>
                        </td>
                        <td class="title-container" style="padding:32px 0px!important">
                            
                            <div class="title" style="width:107%!important;">
                            <h4> <a class="badge" style="color:white;">{{ucfirst($oferta['tipo'])}}</a> &nbsp;<a href="#"> <a   data-toggle="tooltip" title="{{$oferta['estado']->descripcion}}" class="badge {{$oferta['estado']->nombre}}" style="color: {{$oferta['estado']->color_letra}}; background: {{$oferta['estado']->color}};">{{$oferta['estado']->nombre}}</a> &nbsp;<a style="font-size: medium;" href="#">  {{$oferta['titulo']}}</a> </h4>
                                <table class="table  table-bordered">
                                    <tr>
                                        <th style="text-align:center;">Precio</th>
                                        <th style="text-align:center;">Oferta</th>
                                        @if(App\Company::info()->crm)
                                            <th style="text-align:center;">Enviado</th>
                                        @endif
                                    </tr>

                                    <tr>
                                        <td style="text-align:right;">
                                            <span  style="color: var(--main-color);"  class="table-property-price price">{{$oferta['moneda']}}${{number_format($oferta['precio_original'])}}</span>
                                        </td>

                                        <td style="text-align:right;">
                                            <span style="color:red;" class="table-property-price">{{$oferta['moneda']}}${{number_format($oferta['precio_oferta'])}}</span>
                                        </td>
                                        @if(App\Company::info()->crm)
                                            <td style="text-align:right;">
                                                <span style="color: #4CAF50;"class="table-property-price">{{$oferta['moneda']}}${{number_format($oferta['precio'])}}</span>
                                            </td>
                                        @endif
                                    </tr>
                                </table>
                                {{-- <span  style="color: var(--main-color);"  class="table-property-price price">RD${{number_format($oferta['precio_original'])}}</span><br>
                                <span style="color:red;" class="table-property-price">RD${{number_format($oferta['precio_oferta'])}}</span><br>
                                <span style="color: #4CAF50;"class="table-property-price"> Enviado :</>  RD${{number_format($oferta['precio'])}}</span> --}}
                            </div>
                            
                            
                        </td>
                        {{-- <td>
                            <span class="badge"> {{ucfirst($oferta['tipo'])}}</span>
                        </td> --}}
                        @if(App\Company::info()->crm)
                        <td class="action" style="padding-top: 30px;">
                            <p>
                                {{ date("d/m/Y", strtotime($oferta['fecha']))       }}
                            </p>
                            @if($oferta['estado']->id != 3)
                            <p>
                            <button class="btn contra-oferta "  monto="{{$oferta['precio']}}" oferta-id="{{$oferta['oportunidad']}}"  style="font-size: 11px; background-color: #ff9800; color: white; font-weight: 500; ">Contra Oferta</button>
                            </p>
                            <p>
                                <button class="btn btn-danger cancelar-oferta " oferta-id="{{$oferta['oportunidad']}}" style="font-size: 11px;  color: white; font-weight: 500; ">Cancelar Oferta</button>
                            </p>
                            @endif
                            {{-- <a href="#"><i class="fa  fa-eye-slash"></i> Ver</a>
                            <a href="">
                                @if($oferta['favorito'])
                                <i  data-id="{{$oferta['id']}}" tipo="vehiculo" modelo="Vehiculo" class="fa fa-star star-checked" style="font-size: x-large;     display: contents;"></i>
                                @else
                                <i data-id="{{$oferta['id']}}" tipo="vehiculo" modelo="Vehiculo" class="fa fa-star" style="color:darkgrey; font-size: x-large;     display: contents;"></i>
                                @endif
                            </a> --}}
                            
                            
                            
                            
                        </td>
                        @endif
                    </tr>
                    @endforeach

          


                    </tbody>
                </table>
                <!-- table end -->
            </div>
        </div>
    </div>
</div>
<!-- My Propertiess end -->
<style>

    .analisis {
        background: red;
        color: white;
    }
</style>

@endsection