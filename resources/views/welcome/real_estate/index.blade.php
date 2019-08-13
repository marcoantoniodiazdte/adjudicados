@extends('welcome.layouts.layout')

@section('content')
<!-- Agent section start -->
<div class="content-area agent-section">
    <div class="container">
        <!-- option bar start -->
        <div class="option-bar">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-sm-5 col-xs-2">
                    <h4>
                        <span class="heading-icon">
                            <i class="fa fa-th-large"></i>
                        </span>
                        <span class="hidden-xs">Inmobiliarias</span>
                    </h4>
                </div>
                <div class="col-lg-6 col-md-7 col-sm-7 col-xs-10 ">
                    <div class="sorting-options">
                        <select class="sorting">
                            <option>Nuevas</option>
                            <option>Mas antiguas</option>
                        </select>

                    </div>
                </div>
            </div>
        </div>
        <!-- option bar end -->
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <!-- Agent 1 start -->
                <div class="agent-1">
                    <!-- Agent img -->
                    <a  class="agent-img">
                        <img src="https://eurodom.com.do/site/templates/eurodom/images/eurodom-logo.png" width="262" height="200" alt="team-1" class="img-responsive">
                    </a>
                    <!-- Agent content -->
                    <div class="agent-content">
                        <h5><a href="/agente/1">EURO-DOM</a></h5>
                    </div>
                </div>
                <!-- Agent 1 end -->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <!-- Agent 1 start -->
                <div class="agent-1">
                    <!-- Agent img -->
                    <a  class="agent-img">
                        <img src="https://webassets.inman.com/wp-content/uploads/2017/08/remax-former-branding-1024x454.png"  width="262" height="200" alt="team-2" class="img-responsive">
                    </a>
                    <!-- Agent content -->
                    <div class="agent-content">
                        <h5><a href="/agente/1" >Remax</a></h5>
                    </div>
                </div>
                <!-- Agent 1 end -->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <!-- Agent 1 start -->
                <div class="agent-1">
                    <!-- Agent img -->
                    <a  class="agent-img">
                        <img src="https://s3.amazonaws.com/assets.moveglobally.com/organization_files/13303/ABAR_logo__.jpg"  width="262" height="200" alt="team-3" class="img-responsive">
                    </a>
                    <!-- Agent content -->
                    <div class="agent-content">
                        <h5><a href="/agente/1">ABAR</a></h5>
                    </div>
                </div>
                <!-- Agent 1 end -->
            </div>
        </div>
    </div>
</div>
<!-- Agent section end -->
@endsection