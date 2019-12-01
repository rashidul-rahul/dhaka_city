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
                                <h2>Mosques commonly serve as locations for prayer, Ramadan vigils, funeral services <br> Sufi ceremonies, marriage and business agreements, alms collection and distribution, as well as homeless shelters. </h2>
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
                                <h2>Dhaka is the economic, political and cultural center of Bangladesh. It is the major cities of South Asia, <br> the largest city in Eastern South Asia and among the Bay of Bengal countries</h2>
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
                                <h2>Dhaka is the financial, commercial and the entertainment capital of Bangladesh, <br> With an estimated GDP of $156 billion, it accounts up to 35% of Bangladesh's economy.</h2>
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
                        <p class="lead">Dhaka South City Corporation (DSCC) Mayor Sayeed Khokon today said bus route franchise system can be a possible solution to the crisis that the transport sector in the country is currently facing now.</p>

                        <p> Under the bus route franchise system, all existing bus companies operating on a particular route with valid permit will run under five bus companies, which will bring discipline back in this sector, Mayor Khokon said.
                         The DSCC mayor also mentioned that a meeting will be held at Local Government and Rural Development (LGRD) Ministry tomorrow with concerned authorities to discuss the possible solution to resolve this ongoing crisis in the city’s public transport sector.The city corporation authorities will take necessary steps to resolve the crisis based on the outcomes of the meeting, he said.Khokon also said a group of people are trying to instigate and misuse the demonstrating students of schools and colleges amid the ongoing protests to serve the interest of a vested quarter. </p>

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
                        <p class="lead">For a country to develop and keep up with the times, it is necessary that it creates a working infrastructure. It is the country's public services sector that is concerned with this. Public services in Bangladesh are services provided by the government to the community.</p>

                        <p> The Police Force in Bangladesh provides the people with internal security as well as acting to guard the nation’s assets from terrorists and criminal elements. Bangladesh’s police service falls under the jurisdiction of the Ministry of Home Affairs. In recent times a police reform program has been put in action to improve their skills and effectiveness. Police in Bangladesh play a vital role in maintaining domestic peace, handling criminals, investigating crimes and so on. </p>

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
                        <p>Most of the hospitals in Dhaka have their own ambulance service to serve people in emergency moments. Besides, there are some private ambulance services who serve people in cheap price. A list of Hospitals and their ambulance services contact numbers are given below.Square Hospital – 8144466, 8144477, 8144488 Apollo Hospitals Dhaka – 10678 United – 10666, 01914001234 Central – 01733972986Ad-din Women’s Medical College Hospital – 01713488411-15Monow</p>
                    </div>
                </div>
                <!-- end service -->

                <div class="service-widget">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('assets/frontend/uploads/dhaka_city/police_bangla.jpg') }}" alt="" class="img-responsive img-rounded">
                    </div>
                    <div class="service-dit">
                        <h3>Police</h3>
                        <p>The Dhaka Metropolitan Police is the unit of Bangladesh Police responsible for law enforcement in the metropolis of Dhaka, the national capital and most populous city in Bangladesh. The DMP is the largest police force in Bangladesh. At present the DMP commissioner is Md. Shafiqul Islam BPM.DMP Control Room-9575500, 01817602050 Traffic Control Room 9575501, 01711000990, 01711000991, 01707806111</p>
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
                        <p>Bangladesh Fire Service and Civil Defense Call 02-9555555.Bangladesh Fire Service and Civil Defence is a department responsible rescue missions in Bangladesh including fire safety, safety during air raids and any kind of disaster. Emergency hotline for fire service is 9-9-9. The Present Director General is Brigadier General Sazzad Hossin</p>
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
                        <p>Outgoing Dhaka Metropolitan Police (DMP) Commissioner Asaduzzaman Mia <br> has been appointed as chief executive officer of National Security Affairs Cell under the Cabinet Division.Asaduzzaman was appointed to the post on contract basis for the next three years from September 14, according to the notice</p>
                        <p>ontacted, Asaduzzaman said his area of work will be providing secretarial service to the security cell.Replying to another query, he said the cell was formed under the Cabinet Division around three months ago.</p>
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
                    <img src="{{ asset('assets/frontend/uploads/ipad.jpg') }}" class="img-center img-responsive" alt="">
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
