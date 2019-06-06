<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    {{--<div class="user-info" style="background: url({{asset('img/users/user-img-background.jpg')}}) no-repeat no-repeat;">--}}
    <div class="user-info" style="background-color: #68C56C;">

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


            @if($modulos->contains('clase','inmo_management') )
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
            @endif

            @if($modulos->contains('clase','propiedad_management') )
                <li class="header">Inmuebles</li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">view_quilt</i>
                        <span > Inmuebles </span>
                    </a>
                    <ul class="ml-menu">
                        <li class="">
                            <a href="{{route('proyectos.index')}}">
                                <i class="material-icons col-blue">view_quilt</i>
                                <span>Proyectos</span>
                            </a>
                            <a href="{{route('propiedades.index')}}">
                                <i class="material-icons col-blue">view_quilt</i>
                                <span>Propiedades</span>
                            </a>
                            <a href="{{route('tipos_caracteristicas.index')}}">
                                <i class="material-icons col-blue">format_size</i>
                                <span>Tipos Caracteristicas</span>
                            </a>
                            <a href="{{route('tipos_atributos.index')}}">
                                <i class="material-icons col-blue">format_size</i>
                                <span>Tipos Atributos</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endif

            @if($modulos->contains('clase','user_management') )
                  {{--  <li class="header">User Managment</li>--}}
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                            <i class="material-icons">person</i>
                            <span >User Managment </span>
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

            @if($modulos->contains('clase','banco_management') )
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
            @endif
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