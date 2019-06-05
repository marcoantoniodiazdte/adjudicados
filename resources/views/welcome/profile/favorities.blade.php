
@extends('welcome.layouts.layout')
@section('content')
<!-- My Propertiess start -->
<div class="content-area-7 my-properties">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <!-- User account box start -->
                <div class="user-account-box">
                    <div class="header clearfix">
                        <div class="edit-profile-photo">
                            <img src="http://placehold.it/150x150" alt="agent-1" class="img-responsive">
                            <div class="change-photo-btn">
                                <div class="photoUpload">
                                    <span><i class="fa fa-upload"></i>Subir foto</span>
                                    <input type="file" class="upload">
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

                    </div>
                    <div class="content">
                        <ul>
                            <li>
                                <a href="{{route('profile')}}"   >
                                    <i class="flaticon-social"></i>Perfil
                                </a>
                            </li>
                            <li>
                                <a href="{{route('profile.properties')}}" >
                                    <i class="flaticon-apartment"></i>Mis Propiedades
                                </a>
                            </li>
                            <li>
                                <a class="active" href="{{route('profile.favorites')}}">
                                    <i class="fa fa-heart"></i>Propiedades Favoritas
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
                     <h1><span>Mis Propiedades</span> Favoritas</h1>
                 </div>
                <!-- table start -->
                <table class="manage-table responsive-table">
                    <tbody>

                    <tr>
                        <td class="title-container">
                            <img src="http://placehold.it/130x90" alt="my-properties-1" class="img-responsive hidden-xs">
                            <div class="title">
                                <h4><a href="#">beautiful  Family  home </a></h4>
                                <span><i class="fa fa-map-marker"></i> 123 Kathal St. Tampa City, </span>
                                <span class="table-property-price">$900 / monthly</span>
                            </div>
                        </td>
                        <td class="expire-date hidden-xs">December 17 2017</td>
                        <td class="action">
                            <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
                            <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td class="title-container">
                            <img src="http://placehold.it/130x90" alt="my-properties-2" class="img-responsive hidden-xs">
                            <div class="title">
                                <h4><a href="#">beautiful  Family  home </a></h4>
                                <span><i class="fa fa-map-marker"></i> 123 Kathal St. Tampa City, </span>
                                <span class="table-property-price">$900 / monthly</span>
                            </div>
                        </td>
                        <td class="expire-date hidden-xs">December 17 2017</td>
                        <td class="action">
                            <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
                            <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td class="title-container">
                            <img src="http://placehold.it/130x90" alt="my-properties-3" class="img-responsive hidden-xs">
                            <div class="title">
                                <h4><a href="#">beautiful  Family  home </a></h4>
                                <span><i class="fa fa-map-marker"></i> 123 Kathal St. Tampa City, </span>
                                <span class="table-property-price">$900 / monthly</span>
                            </div>
                        </td>
                        <td class="expire-date hidden-xs">December 17 2017</td>
                        <td class="action">
                            <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
                            <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td class="title-container">
                            <img src="http://placehold.it/130x90" alt="my-properties-4" class="img-responsive hidden-xs">
                            <div class="title">
                                <h4><a href="#">beautiful  Family  home </a></h4>
                                <span><i class="fa fa-map-marker"></i> 123 Kathal St. Tampa City, </span>
                                <span class="table-property-price">$900 / monthly</span>
                            </div>
                        </td>
                        <td class="expire-date hidden-xs">December 17 2017</td>
                        <td class="action">
                            <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
                            <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
                        </td>
                    </tr>

                    <tr>
                        <td class="title-container">
                            <img src="http://placehold.it/130x90" alt="my-properties-5" class="img-responsive hidden-xs">
                            <div class="title">
                                <h4><a href="#">beautiful  Family  home </a></h4>
                                <span><i class="fa fa-map-marker"></i> 123 Kathal St. Tampa City, </span>
                                <span class="table-property-price">$900 / monthly</span>
                            </div>
                        </td>
                        <td class="expire-date hidden-xs">December 17 2017</td>
                        <td class="action">
                            <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
                            <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
                        </td>
                    </tr>

                    </tbody>
                </table>
                <!-- table end -->
            </div>
        </div>
    </div>
</div>
<!-- My Propertiess end -->

@endsection