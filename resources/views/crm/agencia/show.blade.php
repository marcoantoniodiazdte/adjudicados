@extends('crm.layouts.base_crm')

@section('title', 'Inmobiliaria')

@section('navbar_content')
    @include('crm.layouts.components.navbar')
@endsection


@section('left_sidebar_navbar_content')
    @include('crm.layouts.components.left_sidebar')
@endsection

@section('pages_css_files')
    <link href="{{ asset('plugins/materialize-stepper/css/mstepper.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/multi-select/css/multi-select.css') }}" rel="stylesheet">
@stop


@section('contenido_inmobiliaria')
    <div class="card">
        <div class="header">
            <h2><i class="material-icons">search</i>Consulta Inmobiliaria</h2>
            <ul class="header-dropdown">
                <li>
                    <a href="{{route('companies.edit',$inmobiliaria->id)}}" data-toggle="tooltip" data-original-title="Create">
                        <i class="material-icons col-blue">edit</i>
                    </a>
                </li>
            </ul>
        </div>

            <div class="body">


                <div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Datos Inmobiliaria</a></li>
                        <li role="presentation"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Modulos Inmobiliaria</a></li>
                        <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Administrador Inmobiliaria</a></li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                            <div class="panel panel-default panel-post">
                                <div class="panel-heading">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img src="../../images/user-lg.jpg" />
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <a href="#">Marc K. Hammond</a>
                                            </h4>
                                            Shared publicly - 26 Oct 2018
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="post">
                                        <div class="post-heading">
                                            <p>I am a very simple wall post. I am good at containing <a href="#">#small</a> bits of <a href="#">#information</a>. I require little more information to use effectively.</p>
                                        </div>
                                        <div class="post-content">
                                            <img src="../../images/profile-post-image.jpg" class="img-responsive" />
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="material-icons">thumb_up</i>
                                                <span>12 Likes</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="material-icons">comment</i>
                                                <span>5 Comments</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="material-icons">share</i>
                                                <span>Share</span>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Type a comment" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade in" id="profile_settings">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="NameSurname" class="col-sm-2 control-label">Name Surname</label>
                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="NameSurname" name="NameSurname" placeholder="Name Surname" value="Marc K. Hammond" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Email" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" value="example@example.com" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputExperience" class="col-sm-2 control-label">Experience</label>

                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <textarea class="form-control" id="InputExperience" name="InputExperience" rows="3" placeholder="Experience"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="InputSkills" class="col-sm-2 control-label">Skills</label>

                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="InputSkills" name="InputSkills" placeholder="Skills">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <input type="checkbox" id="terms_condition_check" class="chk-col-red filled-in" />
                                        <label for="terms_condition_check">I agree to the <a href="#">terms and conditions</a></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="OldPassword" class="col-sm-3 control-label">Old Password</label>
                                    <div class="col-sm-9">
                                        <div class="form-line">
                                            <input type="password" class="form-control" id="OldPassword" name="OldPassword" placeholder="Old Password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="NewPassword" class="col-sm-3 control-label">New Password</label>
                                    <div class="col-sm-9">
                                        <div class="form-line">
                                            <input type="password" class="form-control" id="NewPassword" name="NewPassword" placeholder="New Password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="NewPasswordConfirm" class="col-sm-3 control-label">New Password (Confirm)</label>
                                    <div class="col-sm-9">
                                        <div class="form-line">
                                            <input type="password" class="form-control" id="NewPasswordConfirm" name="NewPasswordConfirm" placeholder="New Password (Confirm)" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-danger">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
               {{-- <h3>Datos Inmobiliaria</h3>
                <li>{{$inmobiliaria->name}}</li>
                <li>{{$inmobiliaria->description}}</li>

                <h3>Administrador</h3>
                <li>{{$inmobiliaria->admin->name }}</li>
                <li>{{$inmobiliaria->admin->email }}</li>



                <h3>Modulos</h3>
                @foreach($inmobiliaria->modules as $modulo)
                    <li>{{ $modulo->title }}</li>
                @endforeach
--}}



            </div>
    </div>
@endsection



