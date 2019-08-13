@extends('welcome.layouts.layout')
@section('content')
<!-- Properties details page start -->
<div class="content-area properties-details-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- Header -->
                <div class="heading-properties clearfix sidebar-widget">
                    <div class="pull-left">
                        <h3>Sweet Family Home</h3>
                        <p>
                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                        </p>
                    </div>
                    <div class="pull-right">
                        <h3><span>$362,100</span></h3>
                        <h5>
                            Per Manth
                        </h5>
                    </div>
                </div>

                <!-- Properties detail slider start -->
                <div class="properties-detail-slider simple-slider mb-40">
                    <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                        <div class="carousel-outer">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item">
                                    <img src="http://placehold.it/1140x500" class="thumb-preview" alt="Chevrolet Impala">
                                </div>
                                <div class="item">
                                    <img src="http://placehold.it/1140x500" class="thumb-preview" alt="Chevrolet Impala">
                                </div>
                                <div class="item">
                                    <img src="http://placehold.it/1140x500" class="thumb-preview" alt="Chevrolet Impala">
                                </div>
                                <div class="item">
                                    <img src="http://placehold.it/1140x500" class="thumb-preview" alt="Chevrolet Impala">
                                </div>
                                <div class="item">
                                    <img src="http://placehold.it/1140x500" class="thumb-preview" alt="Chevrolet Impala">
                                </div>
                                <div class="item">
                                    <img src="http://placehold.it/1140x500" class="thumb-preview" alt="Chevrolet Impala">
                                </div>
                                <div class="item">
                                    <img src="http://placehold.it/1140x500" class="thumb-preview" alt="Chevrolet Impala">
                                </div>
                                <div class="item active">
                                    <img src="http://placehold.it/1140x500" class="thumb-preview" alt="Chevrolet Impala">
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                                    <span class="slider-mover-left no-bg t-slider-r pojison" aria-hidden="true">
                                        <i class="fa fa-angle-left"></i>
                                    </span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                    <span class="slider-mover-right no-bg t-slider-l pojison" aria-hidden="true">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- Indicators -->
                        <ol class="carousel-indicators thumbs visible-lg visible-md">
                            <li data-target="#carousel-custom" data-slide-to="0" class=""><img src="http://placehold.it/90x60" alt="Chevrolet Impala"></li>
                            <li data-target="#carousel-custom" data-slide-to="1" class=""><img src="http://placehold.it/90x60" alt="Chevrolet Impala"></li>
                            <li data-target="#carousel-custom" data-slide-to="2" class=""><img src="http://placehold.it/90x60" alt="Chevrolet Impala"></li>
                            <li data-target="#carousel-custom" data-slide-to="3" class=""><img src="http://placehold.it/90x60" alt="Chevrolet Impala"></li>
                            <li data-target="#carousel-custom" data-slide-to="4" class=""><img src="http://placehold.it/90x60" alt="Chevrolet Impala"></li>
                            <li data-target="#carousel-custom" data-slide-to="5" class=""><img src="http://placehold.it/90x60" alt="Chevrolet Impala"></li>
                            <li data-target="#carousel-custom" data-slide-to="6" class=""><img src="http://placehold.it/90x60" alt="Chevrolet Impala"></li>
                            <li data-target="#carousel-custom" data-slide-to="7" class=""><img src="http://placehold.it/90x60" alt="Chevrolet Impala"></li>
                        </ol>
                    </div>
                </div>
                <!-- Properties detail slider end -->

            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <!-- Properties details section start -->
                <div class="properties-details-section sidebar-widget">

                    <!-- Advanced search start -->
                    <div class="advabced-search hidden-lg hidden-md">
                        <div class="main-title-2">
                            <h1><span>Advanced</span> Search</h1>
                        </div>

                        <form method="GET">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-status" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Property Status</option>
                                    <option>For Sale</option>
                                    <option>For Rent</option>
                                </select>
                            </div>
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

                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-types" data-live-search="true" data-live-search-placeholder="Search value" >
                                    <option>Property Types</option>
                                    <option>Residential</option>
                                    <option>Commercial</option>
                                    <option>Land</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <select class="selectpicker search-fields" name="area-from" data-live-search="true" data-live-search-placeholder="Search value" >
                                    <option>Area From</option>
                                    <option>1000</option>
                                    <option>800</option>
                                    <option>600</option>
                                    <option>400</option>
                                    <option>200</option>
                                    <option>100</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bedrooms">
                                            <option>Bedrooms</option>
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
                                            <option>Bathroom</option>
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
                                        <select class="selectpicker search-fields" name="balcony">
                                            <option>Balcony</option>
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
                                        <select class="selectpicker search-fields" data-live-search="true" name="garage">
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
                                <div data-min="0" data-max="10000" data-unit="Sq ft" data-min-name="min_area" data-max-name="max_area" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="range-slider">
                                <label>Price</label>
                                <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="form-group">
                                <button class="search-button">Search</button>
                            </div>
                        </form>
                    </div>
                    <!-- Advanced search end -->

                    <!-- Property description start -->
                    <div class="panel-box properties-panel-box Property-description">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab" aria-expanded="true">Description</a></li>
                            <li class=""><a href="#tab2default" data-toggle="tab" aria-expanded="false">Condition</a></li>
                            <li class=""><a href="#tab3default" data-toggle="tab" aria-expanded="false">Amenities</a></li>
                            <li class=""><a href="#tab4default" data-toggle="tab" aria-expanded="false">Floor Plans</a></li>
                            <li class=""><a href="#tab5default" data-toggle="tab" aria-expanded="false">Video</a></li>
                        </ul>
                        <div class="panel with-nav-tabs panel-default">
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="tab1default">
                                        <div class="main-title-2">
                                            <h1><span>Description</span></h1>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper placerat, velit risus accumsan nisl, eget tempor lacus est vel nunc. Proin accumsan elit sed neque euismod fringilla. Curabitur lobortis nunc velit, et fermentum urna dapibus non. Vivamus magna lorem, elementum id gravida ac, laoreet tristique augue. Maecenas dictum lacus eu nunc porttitor, ut hendrerit arcu efficitur.</p>
                                        <br>
                                        <p>Nam mattis lobortis felis eu blandit. Morbi tellus ligula, interdum sit amet ipsum et, viverra hendrerit lectus. Nunc efficitur sem vel est laoreet, sed bibendum eros viverra. Vestibulum finibus, ligula sed euismod tincidunt, lacus libero lobortis ligula, sit amet molestie ipsum purus ut tortor. Nunc varius, dui et sollicitudin facilisis, erat felis imperdiet felis, et iaculis dui magna vitae diam. Donec mattis diam nisl, quis ullamcorper enim malesuada non. Curabitur lobortis eu mauris nec vestibulum. Nam efficitur, ex ac semper malesuada nisi odio consequat dui, hendrerit vulputate odio dui vitae massa. Aliquam tortor urna, tincidunt</p>
                                    </div>
                                    <div class="tab-pane fade features" id="tab2default">
                                        <!-- Properties condition start -->
                                        <div class="properties-condition">
                                            <div class="main-title-2">
                                                <h1><span>Condition</span></h1>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <ul class="condition">
                                                        <li>
                                                            <i class="fa fa-check-square"></i>3 Beds
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Bathroom
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <ul class="condition">
                                                        <li>
                                                            <i class="fa fa-check-square"></i>4800 sq ft
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>TV
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <ul class="condition">
                                                        <li>
                                                            <i class="fa fa-check-square"></i>1 Garage
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Balcony
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Properties condition end -->
                                    </div>
                                    <div class="tab-pane fade technical" id="tab3default">
                                        <!-- Properties amenities start -->
                                        <div class="properties-amenities">
                                            <div class="main-title-2">
                                                <h1><span>Amenities</span></h1>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <ul class="amenities">
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Air conditioning
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Balcony
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Pool
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>TV
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Gym
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <ul class="amenities">
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Wifi
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Parking
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Double Bed
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Iron
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <ul class="amenities">
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Telephone
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Jacuzzi
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Alarm
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-square"></i>Garage
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Properties amenities end -->
                                    </div>
                                    <div class="tab-pane fade" id="tab4default">
                                        <!-- Floor Plans start -->
                                        <div class="floor-plans">
                                            <div class="main-title-2">
                                                <h1><span>Floor Plans</span></h1>
                                            </div>
                                            <table>
                                                <tbody><tr>
                                                    <td><strong>Size</strong></td>
                                                    <td><strong>Rooms</strong></td>
                                                    <td><strong>2 Bathrooms</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>1600</td>
                                                    <td>3</td>
                                                    <td>2</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <img src="http://placehold.it/708x359" alt="floor-plans" class="img-responsive">
                                        </div>
                                        <!-- Floor Plans end -->
                                    </div>
                                    <div class="tab-pane fade" id="tab5default">
                                        <!-- Inside properties start  -->
                                        <div class="inside-properties">
                                            <!-- Main Title 2 -->
                                            <div class="main-title-2">
                                                <h1><span>Video </span></h1>
                                            </div>
                                            <iframe src="https://www.youtube.com/embed/5e0LxrLSzok" allowfullscreen=""></iframe>
                                        </div>
                                        <!-- Inside properties end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Property description end -->
                </div>
                <!-- Properties details section end -->

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <!-- Sidebar start -->
                <div class="sidebar right">


                    <!-- Popular posts start -->
                    <div class="sidebar-widget popular-posts">
                        <div class="main-title-2">
                            <h1><span>Recently</span> Properties</h1>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="http://placehold.it/90x63" alt="small-properties-1">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="properties-details.html">Sweet Family Home</a>
                                </h3>
                                <p>February 27, 2018</p>
                                <div class="price">
                                    $734,000
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="http://placehold.it/90x63" alt="small-properties-2">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="properties-details.html">Modern Family Home</a>
                                </h3>
                                <p>February 27, 2018</p>
                                <div class="price">
                                    $734,000
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="http://placehold.it/90x63" alt="small-properties-3">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="properties-details.html">Beautiful Single Home</a>
                                </h3>
                                <p>February 27, 2018</p>
                                <div class="price">
                                    $734,000
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Popular posts end -->

                    <!-- Social media start -->
                    <div class="social-media sidebar-widget clearfix">
                        <!-- Main Title 2 -->
                        <div class="main-title-2">
                            <h1><span>Social</span> Media</h1>
                        </div>
                        <!-- Social list -->
                        <ul class="social-list">
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                    <!-- Social media end -->

                    <!-- Latest reviews end -->
                </div>
                <!-- Sidebar end -->
            </div>
        </div>
    </div>
</div>
<!-- Properties details page end -->

<!-- Partners block start -->
<div class="partners-block">
    <div class="container">
        <h3>Brands & Partners</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel our-partners slide" id="ourPartners">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="http://placehold.it/135x50" alt="partner">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="http://placehold.it/135x50" alt="partner-2">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="http://placehold.it/135x50" alt="partner-3">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="http://placehold.it/135x50" alt="partner-4">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="http://placehold.it/135x50" alt="partner-5">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#ourPartners" data-slide="prev"><i class="fa fa-chevron-left icon-prev"></i></a>
                    <a class="right carousel-control" href="#ourPartners" data-slide="next"><i class="fa fa-chevron-right icon-next"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partners block end -->



@endsection