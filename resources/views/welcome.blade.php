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
        .slider-bg-one {
            background-image: url("{{ asset('assets/frontend/uploads/dhaka_city/dhaka1.jpg') }}");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .slider-bg-two {
            background-image: url("{{ asset('assets/frontend/uploads/dhaka_city/dhaka2.jpg') }}");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .slider-bg-three {
            background-image: url("{{ asset('assets/frontend/uploads/dhaka_city/dhaka3.jpg') }}");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
@endpush
@section('content')
    <div class="slider-area">
        <div class="slider-wrapper owl-carousel">
            <div class="slider-item text-center home-one-slider-otem slider-item-four slider-bg-one">
                <div class="container">
                    <div class="row">
                        <div class="slider-content-area">
                            <div class="slide-text">
                                <h1 class="homepage-three-title">Dhaka <span>The City of</span> Mosque</h1>
                                <h2>With GoodWEB Solutions responsive landing page template, <br>you can promote your all web design & development services. </h2>
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
                                <h1 class="homepage-three-title">2 <span>Installation</span> Services</h1>
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
                                <h1 class="homepage-three-title">3 <span>Installation</span> Services</h1>
                                <h2>With GoodWEB Solutions responsive landing page template, <br>you can promote your all web design & development services.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>City Mayor Speech</h4>
                        <h2>Welcome to Dhaka City</h2>
                        <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>

                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo. </p>

                        <a href="#services" class="btn btn-light btn-radius btn-brd grd1">Learn More</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('assets/frontend/uploads/dhaka_city/images.jpeg') }}" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="hr1">

            <div class="row">
                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('assets/frontend/uploads/about_02.jpg') }}" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="message-box">
                        <h4>Quick Links</h4>
                        <h2>Here found some link of Bangladesh Government Service</h2>
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
                    <p class="stat_count">
                        @if($information == null)
                            {{ 100 }}
                            @else
                        {{ $information->man }}
                            @endif
                    </p>
                    <h3>Man</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1"><img class="size-img" src="{{ asset('assets/frontend/icons/man.svg') }}" alt="Men"></span>
                    <p class="stat_count">@if($information == null)
                            {{ 100 }}
                        @else
                            {{ $information->woman }}
                        @endif</p>
                    <h3>Women</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1"><img class="size-img" src="{{ asset('assets/frontend/icons/people.svg') }}" alt="People"></span>
                    <p class="stat_count">@if($information == null)
                            {{ 100 }}
                        @else
                            {{ $information->people }}
                        @endif</p>
                    <h3>Total Peoples</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1"><img class="size-img" src="{{ asset('assets/frontend/icons/place.svg') }}" alt="Place"></span>
                    <p class="stat_count">@if($information == null)
                            {{ 100 }}
                        @else
                            {{ $information->place }}
                        @endif</p>
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
                <h3>Emergency Service</h3>
                <p class="lead">All emergency serrvice can get in one number: <b>999</b></p>
                <p>You get these three 24/7 Serevice</p>
            </div><!-- end title -->

            <div class="owl-services owl-carousel owl-theme">
                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <a href="">
                        <img src="{{ asset('assets/frontend/uploads/dhaka_city/ambulance.jpeg') }}" alt="" class="img-responsive img-rounded">
                        </a>
                    </div>
                    <div class="service-dit">
                        <h3>Ambulance</h3>
                        <p>Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</p>
                    </div>
                </div>
                <!-- end service -->

                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('assets/frontend/uploads/dhaka_city/police_bangla.jpg') }}" alt="" class="img-responsive img-rounded">
                    </div>
                    <div class="service-dit">
                        <h3>Police</h3>
                        <p>Duis at tellus at dui tincidunt scelerisque nec sed felis. Suspendisse id dolor sed leo rutrum euismod. Nullam vestibulum fermentum erat. It nam auctor. </p>
                    </div>
                </div>
                <!-- end service -->

                <div class="service-widget">
                    <div class="post-media wow fadeIn">
{{--                        <a href="{{ asset('assets/frontend/uploads/service_03.jpg') }}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>--}}
                        <img src="{{ asset('assets/frontend/uploads/dhaka_city/fire.jpg') }}" alt="" class=" img-rounded">
                    </div>
                    <div class="service-dit">
                        <h3>Fire Service</h3>
                        <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis accumsan.</p>
                    </div>
                </div>
                <!-- end service -->
            </div><!-- end row -->

            <hr class="hr1">
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="parallax section noover" data-stellar-background-ratio="0.7" style="background-image:url('{{ asset('assets/frontend/uploads/parallax_05.png') }}');">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6">
                    <div class="customwidget text-left">
                        <h1>Speech of Dhaka Police</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, quas. <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi deleniti magnam obcaecati suscipit temporibus voluptas.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis harum iure nam officiis ratione sit soluta voluptatibus. Doloribus facilis, nisi!</p>
                    </div>
                </div><!-- end col -->
                <div class="col-md-6">
                    <div class="text-center image-center hidden-sm hidden-xs">
                        <img src="{{ asset('assets/frontend/uploads/dhaka_city/poloce.jpg') }}" alt="" class="img-responsive wow fadeInUp">
                    </div>
                </div>
            </div><!-- end row -->
        </div>
        <!-- end container -->
    </div><!-- end section -->

    <div id="features" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Future Mobile App</h3>
                <p class="lead">We are going to developing our mobile application for dhaka city</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="features-left">
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                            <i class="flaticon-wordpress-logo"></i>
                            <div class="fl-inner">
                                <h4>{{ $feature }}</h4>
                                <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                            <i class="flaticon-windows"></i>
                            <div class="fl-inner">
                                <h4>{{ $feature }}</h4>
                                <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                            <i class="flaticon-price-tag"></i>
                            <div class="fl-inner">
                                <h4>{{ $feature }}</h4>
                                <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </li>
                        <li class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                            <i class="flaticon-new-file"></i>
                            <div class="fl-inner">
                                <h4>{{ $feature }}</h4>
                                <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 hidden-xs hidden-sm">
                    <img src="{{ asset('assets/frontend/uploads/ipad.png') }}" class="img-center img-responsive" alt="">
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="features-right">
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                            <i class="flaticon-pantone"></i>
                            <div class="fr-inner">
                                <h4>{{ $feature }}</h4>
                                <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </li>
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
                            <i class="flaticon-cloud-computing"></i>
                            <div class="fr-inner">
                                <h4>{{ $feature }}</h4>
                                <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </li>
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
                            <i class="flaticon-line-graph"></i>
                            <div class="fr-inner">
                                <h4>{{ $feature }}</h4>
                                <p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
                            </div>
                        </li>
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <i class="flaticon-coding"></i>
                            <div class="fr-inner">
                                <h4>{{ $feature }}</h4>
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
