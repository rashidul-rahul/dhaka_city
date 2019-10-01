@extends('layouts.frontend.app')
@section('title')
    {{ 'Dhaka City Corporation' }}
@endsection
@push('css')
    <style>
        .parallax-back-img{
            background-image:url('{{ asset('assets/frontend/uploads/dhaka_city/night_Dhaka.jpg') }}');
        }
        .size-img{
            height: 60px;
            width: 60px;
        }
    </style>
@endpush
@section('content')
    <div class="slider-area">
        <div class="slider-wrapper owl-carousel">
            <div class="slider-item home-one-slider-otem slider-item-four slider-bg-one">
                <div class="container">
                    <div class="row">
                        <div class="slider-content-area">
                            <div class="slide-text">
                                <h1 class="homepage-three-title">Outstanding <span>Installation</span> Services</h1>
                                <h2>With GoodWEB Solutions responsive landing page template, <br>you can promote your all web design & development services. </h2>
                                <div class="slider-content-btn">
                                    <a class="button btn btn-light btn-radius btn-brd" href="#">Read More</a>
                                    <a class="button btn btn-light btn-radius btn-brd" href="#">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item text-center home-one-slider-otem slider-item-four slider-bg-two">
                <div class="container">
                    <div class="row">
                        <div class="slider-content-area">
                            <div class="slide-text">
                                <h1 class="homepage-three-title">Outstanding <span>Installation</span> Services</h1>
                                <h2>With GoodWEB Solutions responsive landing page template, <br>you can promote your all web design & development services. </h2>
                                <div class="slider-content-btn">
                                    <a class="button btn btn-light btn-radius btn-brd" href="#">Read More</a>
                                    <a class="button btn btn-light btn-radius btn-brd" href="#">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item home-one-slider-otem slider-item-four slider-bg-three">
                <div class="container">
                    <div class="row">
                        <div class="slider-content-area">
                            <div class="slide-text">
                                <h1 class="homepage-three-title">Outstanding <span>Installation</span> Services</h1>
                                <h2>With GoodWEB Solutions responsive landing page template, <br>you can promote your all web design & development services.</h2>
                                <div class="slider-content-btn">
                                    <a class="button btn btn-light btn-radius btn-brd" href="#">Read More</a>
                                    <a class="button btn btn-light btn-radius btn-brd" href="#">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--some work-->
    <div class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown link
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </div>
    <!-- end some work-->
    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>About Us</h4>
                        <h2>Welcome to GoodWEB Solutions</h2>
                        <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>

                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo. </p>

                        <a href="#services" class="btn btn-light btn-radius btn-brd grd1">Learn More</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="uploads/about_01.jpg" alt="" class="img-responsive img-rounded">
                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="hr1">

            <div class="row">
                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="uploads/about_02.jpg" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="message-box">
                        <h4>Who We are</h4>
                        <h2>We Are GoodWEB Solutions</h2>
                        <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>

                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo. </p>

                        <a href="#services" class="btn btn-light btn-radius btn-brd grd1">Learn More</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="parallax section parallax-off parallax-back-img" data-stellar-background-ratio="0.9" style="">
        <div class="container">
            <div class="row text-center stat-wrap">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1"><img class="size-img" src="{{ asset('assets/frontend/icons/woman.svg') }}" alt="Women"></span>
                    <p class="stat_count">{{ $information->woman }}</p>
                    <h3>Man</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1"><img class="size-img" src="{{ asset('assets/frontend/icons/man.svg') }}" alt="Men"></span>
                    <p class="stat_count">{{ $information->man }}</p>
                    <h3>Women</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1"><img class="size-img" src="{{ asset('assets/frontend/icons/people.svg') }}" alt="People"></span>
                    <p class="stat_count">{{ $information->people }}</p>
                    <h3>Total Peoples</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1"><img class="size-img" src="{{ asset('assets/frontend/icons/place.svg') }}" alt="Place"></span>
                    <p class="stat_count">{{ $information->place }}</p>
                    <h3>Place to visit</h3>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
        <br>
        <br>
        <div class="text-center">
            <a data-scroll="" href="{{ route('about') }}" class="btn btn-light btn-radius btn-brd">Know More about Dhaka</a>
        </div>
    </div><!-- end section -->

    <div id="services" class="parallax section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Our Service</h3>
                <p class="lead">Our Service unlimited solutions to all your business needs. in the installation package we prepare search engine optimization, social media support, we provide corporate identity and graphic design services.</p>
            </div><!-- end title -->

            <div class="owl-services owl-carousel owl-theme">
                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="">
                        <img src="{{ asset('assets/frontend/uploads/service_01.jpg') }}" alt="" class="img-responsive img-rounded">
                        </a>
                    </div>
                    <div class="service-dit">
                        <a href="">
                        <h3>Smart Swatch Editions</h3>
                        <p>Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</p>
                        </a>
                    </div>
                </div>
                <!-- end service -->

                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="uploads/service_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="uploads/service_02.jpg" alt="" class="img-responsive img-rounded">
                    </div>
                    <div class="service-dit">
                        <h3>Web UI Kit Design</h3>
                        <p>Duis at tellus at dui tincidunt scelerisque nec sed felis. Suspendisse id dolor sed leo rutrum euismod. Nullam vestibulum fermentum erat. It nam auctor. </p>
                    </div>
                </div>
                <!-- end service -->

                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="uploads/service_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="uploads/service_03.jpg" alt="" class="img-responsive img-rounded">
                    </div>
                    <div class="service-dit">
                        <h3>Mobile Optimization</h3>
                        <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis accumsan.</p>
                    </div>
                </div>
                <!-- end service -->

                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="uploads/service_04.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="uploads/service_04.jpg" alt="" class="img-responsive img-rounded">
                    </div>
                    <div class="service-dit">
                        <h3>Digital Design for Mac</h3>
                        <p>Praesent in neque congue sapien lobortis faucibus id eget erat. <br>Pellentesque maximus rutrum felis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                    </div>
                </div>
                <!-- end service -->
            </div><!-- end row -->

            <hr class="hr1">

            <div class="text-center">
                <a data-scroll href="#portfolio" class="btn btn-light btn-radius btn-brd">View Our Portfolio</a>
            </div>
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="parallax section noover" data-stellar-background-ratio="0.7" style="background-image:url('{{ asset('assets/frontend/uploads/parallax_05.png') }}');">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6">
                    <div class="customwidget text-left">
                        <h1>Beautiful Websites</h1>
                        <p>Full access control of the background parallax effects, <br>change your awesome background elements and edit colors from style.css or colors.css</p>
                        <ul class="list-inline">
                            <li><i class="fa fa-check"></i> Custom Sections</li>
                            <li><i class="fa fa-check"></i> Parallax's</li>
                            <li><i class="fa fa-check"></i> Icons & PSD</li>
                            <li><i class="fa fa-check"></i> Limitless Colors</li>
                        </ul><!-- end list -->
                        <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd">Learn More</a>
                    </div>
                </div><!-- end col -->
                <div class="col-md-6">
                    <div class="text-center image-center hidden-sm hidden-xs">
                        <img src="uploads/device_03.png" alt="" class="img-responsive wow fadeInUp">
                    </div>
                </div>
            </div><!-- end row -->
        </div>
        <!-- end container -->
    </div><!-- end section -->

    <div id="features" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Features & Overviews</h3>
                <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, <br>lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="features-left">
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                            <i class="flaticon-wordpress-logo"></i>
                            <div class="fl-inner">
                                <h4>WordPress Installation</h4>
                                <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                            <i class="flaticon-windows"></i>
                            <div class="fl-inner">
                                <h4>Browser Compatible</h4>
                                <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                            <i class="flaticon-price-tag"></i>
                            <div class="fl-inner">
                                <h4>eCommerce Ready</h4>
                                <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                            <i class="flaticon-new-file"></i>
                            <div class="fl-inner">
                                <h4>Easy to Customize</h4>
                                <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 hidden-xs hidden-sm">
                    <img src="uploads/ipad.png" class="img-center img-responsive" alt="">
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="features-right">
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                            <i class="flaticon-pantone"></i>
                            <div class="fr-inner">
                                <h4>Limitless Colors</h4>
                                <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </li>
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                            <i class="flaticon-cloud-computing"></i>
                            <div class="fr-inner">
                                <h4>Lifetime Update</h4>
                                <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </li>
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                            <i class="flaticon-line-graph"></i>
                            <div class="fr-inner">
                                <h4>SEO Friendly</h4>
                                <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </li>
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <i class="flaticon-coding"></i>
                            <div class="fr-inner">
                                <h4>Simple Clean Code</h4>
                                <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </li>
                    </ul>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
@endsection
@push('js')
@endpush
