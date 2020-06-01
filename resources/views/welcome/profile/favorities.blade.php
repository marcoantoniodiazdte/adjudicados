
@extends('welcome.layouts.layout')
@section('content')
<!-- My Propertiess start -->
<div class="content-area-7 my-properties">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <!-- User account box start -->
                <div class="user-account-box">
                    {{-- <div class="header clearfix">
                        <div class="edit-profile-photo">
                            <img src="http://placehold.it/150x150" id="image" alt="agent-1" class="img-responsive">
                            <div class="change-photo-btn">
                                <div class="photoUpload">
                                    <span><i class="fa fa-upload"></i>Subir foto</span>
                                    <input type="file" class="upload"  onchange="$('#image').attr('src', window.URL.createObjectURL(this.files[0]))" >
                                </div>
                            </div>
                        </div>
                        <h3>John Doe</h3>
                        <p>johndoe@gmail.com</p>

                        <ul class="social-list clearfix">
                            <li>
                                <a href="#" class="facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="google">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="rss">
                                    <i class="fa fa-rss"></i>
                                </a>
                            </li>
                        </ul>

                    </div> --}}
                    <div class="content">
                        <ul>
                            <li>
                                <a href="{{route('profile')}}"   >
                                    <i class="flaticon-social"></i>Perfil
                                </a>
                            </li>
                            <li>
                                <a href="{{route('profile.properties')}}" >
                                    <i class="flaticon-apartment"></i>Mis Ofertas
                                </a>
                            </li>
                            <li>
                                <a class="active" href="{{route('profile.favorites')}}">
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
                     <h1><span>Mis</span> Favoritos</h1>
                     {{-- {{var_dump({Auth::user())}} --}}
                 </div>
                <!-- table start -->
                <table class="manage-table responsive-table">
                    <tbody>
              

                    @foreach($favoritos as $favorito)
                    <tr>
                        <td class="title-container">
                            <img src="{{$favorito['src']}}" alt="my-properties-1" style="width: 15%!important;" class="img-responsive hidden-xs">
                            <div class="title" style="width:80%!important;">
                            <h4><a class="badge" style="color:white;">{{ucfirst($favorito['tipo'])}} </a>&nbsp;&nbsp;<a href="#">{{$favorito['titulo']}}</a></h4>
                                {{-- <span  style="color: var(--main-color);"  class="table-property-price price"> Precio : RD${{number_format($favorito['precio_original'])}}</span><br>
                                @if($favorito['precio_original'] != $favorito['precio_oferta'])
                                <span style="color:red;" class="table-property-price"> {{$favorito['oferta']}} Oferta : RD${{number_format($favorito['precio_oferta'])}}</span><br>
                                @endif
                                <span style="color: #4CAF50;"class="table-property-price"> Enviado :</>  RD${{number_format($favorito['precio'])}}</span> --}}

                                <table class="table  table-bordered">
                                    <tr>
                                        <th style="text-align:center;">Precio</th>
                                        <th style="text-align:center;">Oferta</th>
                                        {{-- <th style="text-align:center;">Enviado</th> --}}
                                    </tr>

                                    <tr>
                                        <td style="text-align:right;">
                                            <span  style="color: var(--main-color);"  class="table-property-price price">{{$favorito['moneda']}}${{number_format($favorito['precio_original'])}}</span>
                                        </td>

                                        <td style="text-align:right;">
                                            <span style="color:red;" class="table-property-price">{{$favorito['moneda']}}${{number_format($favorito['precio_oferta'])}}</span>
                                        </td>
                                        {{-- <td style="text-align:right;">
                                            <span style="color: #4CAF50;"class="table-property-price">RD${{number_format($favorito['precio'])}}</span>
                                        </td> --}}
                                    </tr>
                                </table>
                            </div>
                            
                            
                        </td>
                        <td class="action">
                            <p>
                                {{ date("d/m/Y", strtotime($favorito['fecha'])) }}
                            </p>
                            
                            @if($favorito)
                                <a data-toggle="tooltip" title="{{$favorito['estado']->descripcion}}"  href="/perfil/propiedades" style="color:{{$favorito['estado']->color_letra}};  background:{{$favorito['estado']->color}}; margin-left:0;" class="badge ">{{ucfirst($favorito['estado']->nombre)}}</a>
                            @endif
                            <a href="#"><i class="fa  fa-eye-slash"></i> Ver</a>
                        </td>
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

@endsection