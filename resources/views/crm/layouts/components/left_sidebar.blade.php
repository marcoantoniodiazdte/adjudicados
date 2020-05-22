<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    {{--<div class="user-info" style="background: url({{asset('img/users/user-img-background.jpg')}}) no-repeat no-repeat;">--}}
    <div class="user-info" style="background-color: #9e9e9e;">

        <div class="image">
            <img src="{{asset('img/users/user.png')}}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{auth()->user()->nombres}}</div>
            <div class="email">{{auth()->user()->email}}</div>
        </div>
    </div>

    <div class="menu">
        <ul class="list">


            {{-- @if($modulos->contains('clase','inmo_management') )
                <li class="header">Inmobiliarias</li>
                <li class="active">
                    <a href="{{route('inmobiliarias.index')}}">
                        <i class="material-icons">home</i>
                        <span>Inmobiliarias</span>
                    </a>
                    @if($modulos->contains('clase','agencia_management') )
                        <a href="{{route('agencias.index')}}">
                            <i class="material-icons col-black">work</i>
                            <span>Agencias</span>
                        </a>
                    @endif
                </li>
            @endif --}}

            @if($modulos->contains('clase','propiedad_management') && Auth::user()->role == 'admin' )
                <li class="header">Opciones</li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">view_quilt</i>
                        <span > Inmuebles </span>
                    </a>
                    <ul class="ml-menu">
                        <li class="">
                            <a href="{{route('proyectos.index')}}">
                                <i class="material-icons col-blue">view_quilt</i>
                                <span>Propiedades</span>
                            </a>
                            <a href="{{route('tipoPropiedades.index')}}">
                                <i class="material-icons col-blue">view_quilt</i>
                                <span>Tipo de Propiedades</span>
                            </a>

                        </li>
                    </ul>
                </li>
            @endif
            @if($modulos->contains('clase','propiedad_management') && App\Company::info()->proyectos_financiados  && Auth::user()->role == 'admin')
                <li>
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">view_quilt</i>
                        <span > Inmobiliarias </span>
                    </a>
                    <ul class="ml-menu">
                        <li class="">
                            <a href="{{route('inmobiliarias.index')}}">
                                <i class="material-icons col-blue">view_quilt</i>
                                <span>Inmobiliarias</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{route('contactos.index')}}">
                                <i class="material-icons col-blue">view_quilt</i>
                                <span>Contactos</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
       
            @if($modulos->contains('clase','propiedad_management') && App\Company::info()->proyectos_financiados)
            <li>
                <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                    <i class="material-icons">view_quilt</i>
                    <span > Oportunidades </span>
                </a>
                <ul class="ml-menu">
                    <li class="">
                        <a href="{{route('oportunidades.index')}}">
                            <i class="material-icons col-blue">view_quilt</i>
                            <span>Oportunidades</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('eventos.index')}}">
                            <i class="material-icons col-blue">view_quilt</i>
                            <span>Eventos</span>
                        </a>
                    </li>
                    @if(Auth::user()->role == 'admin')
                        <li class="">
                            <a href="{{route('estados.index')}}">
                                <i class="material-icons col-blue">view_quilt</i>
                                <span>Estados Oportunidades</span>
                            </a>
                        </li>
                    @endif
                    @if(Auth::user()->role == 'admin')
                        <li class="">
                            <a href="{{route('estado_eventos.index')}}">
                                <i class="material-icons col-blue">view_quilt</i>
                                <span>Estado Eventos</span>
                            </a>
                        </li>
                    @endif
                    
                </ul>
            </li>
            @endif
            @if($modulos->contains('clase','propiedad_management') && App\Company::info()->proyectos_financiados  && Auth::user()->role == 'admin')
                <li>
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">view_quilt</i>
                        <span > Proyectos Financiados </span>
                    </a>
                    <ul class="ml-menu">
                        <li class="">
                            <a href="{{route('proyectosFinanciados.index')}}">
                                <i class="material-icons col-blue">view_quilt</i>
                                <span>Proyectos</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endif
            {{-- <li class="header">Vehiculos</li> --}}
            @if($modulos->contains('clase','user_management')  && Auth::user()->role == 'admin' )
                  {{--  <li class="header">User Managment</li>--}}
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                            <i class="material-icons">directions_car</i>
                            <span >Vehículos </span>
                        </a>
                        <ul class="ml-menu">
                            <li class="">
                                <a href="{{route('vehiculos.index')}}">
                                    <i class="material-icons col-blue">directions_car</i>
                                    <span>Vehículos</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{route('marcas.index')}}">
                                    <i class="material-icons col-blue">view_quilt</i>
                                    <span>Marca</span>
                                </a>
                            </li>
                        </ul>
                    </li>
            @endif
            {{-- <li class="header">Obras de arte</li> --}}
            @if($modulos->contains('clase','user_management')  && Auth::user()->role == 'admin' )
            {{--  <li class="header">User Managment</li>--}}
              <li>
                  <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                      <i class="material-icons">brush</i>
                      <span >Obras de arte </span>
                  </a>
                  <ul class="ml-menu">
                    <li class="">
                        <a href="{{route('obras.index')}}">
                            <i class="material-icons col-blue">brush</i>
                            <span>Obras de arte</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('tipoObras.index')}}">
                            <i class="material-icons col-blue">view_quilt</i>
                            <span>Tipo de Obras</span>
                        </a>
                    </li>
                </ul>
              </li>
            @endif
            @if($modulos->contains('clase','user_management')  && Auth::user()->role == 'admin' )
            {{--  <li class="header">User Managment</li>--}}
              <li>
                  <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                      <i class="material-icons">format_paint</i>
                      <span >Equipos </span>
                  </a>
                  <ul class="ml-menu">
                    <li class="">
                        <a href="{{route('equipos.index')}}">
                            <i class="material-icons col-blue">settings</i>
                            <span>Equipos</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{route('tipoEquipos.index')}}">
                            <i class="material-icons col-blue">view_quilt</i>
                            <span>Tipo de Equipos</span>
                        </a>
                    </li>
                    {{-- <li class="">
                        <a href="{{route('tipoObras.index')}}">
                            <i class="material-icons col-blue">view_quilt</i>
                            <span>Tipo de Obras</span>
                        </a>
                    </li> --}}
                </ul>
              </li>
            @endif
            {{-- <li class="header">Usuarios</li> --}}
            @if($modulos->contains('clase','user_management')  && Auth::user()->role == 'admin' )
                  {{--  <li class="header">User Managment</li>--}}
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                            <i class="material-icons">person</i>
                            <span >Usuarios </span>
                        </a>
                        <ul class="ml-menu">
                            <li class="">
                                @foreach($modulos->where('clase','user_management') as  $modulo)
                                    <a href="{{ route($modulo->base_url)}}">
                                        <i class="material-icons {{$modulo->color}} ">{{$modulo->icon}}</i>
                                        <span>{{$modulo->title}}</span>
                                    </a>
                                @endforeach
                            </li>
                        </ul>
                    </li>
            @endif

            @if($modulos->contains('clase','propiedad_management') && App\Company::info()->proyectos_financiados  && Auth::user()->role == 'admin')
                <li>
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">view_quilt</i>
                        <span > Categorias </span>
                    </a>
                    <ul class="ml-menu">
                        <li class="">
                            <a href="{{route('categorias.index')}}">
                                <i class="material-icons col-blue">view_quilt</i>
                                <span>Categorias</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endif



            @if($modulos->contains('clase','propiedad_management') && App\Company::info()->proyectos_financiados  && Auth::user()->role == 'admin')
                <li>
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">view_quilt</i>
                        <span > Requisitos </span>
                    </a>
                    <ul class="ml-menu">
                        <li class="">
                            <a href="{{route('requisitos.index')}}">
                                <i class="material-icons col-blue">view_quilt</i>
                                <span>Requisitos</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endif

            {{-- @if($modulos->contains('clase','banco_management') )
                <li class="header">Bancos</li>
                @hasrole('superadmin')
                    <li>
                        <a href="{{route('bancos.index')}}">
                            <i class="material-icons col-light-green">account_balance</i>
                            <span>Bancos</span>
                        </a>
                    </li>
                @endhasrole
                    <li>
                        <a href="{{route('admin_mis_bancos_managment')}}">
                            <i class="material-icons col-light-blue">account_balance_wallet</i>
                            <span>Mis Bancos</span>
                        </a>
                    </li>
            @endif --}}
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; <a href="#">Power By</a>.
        </div>
       {{-- <script type="text/javascript" src="https://cdn.ywxi﻿.net/js/1.js" async></script>--}}
        <!--div class="version">
            <b>Version: </b> 1.0.4
        </div-->
    </div>
    <!-- #Footer -->
</aside>