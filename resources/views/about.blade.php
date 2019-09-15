@extends('layouts.frontend.app')

@section('title', 'About')

@push('css')

@endpush

@section('content')
    <div class="banner-area banner-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner">
                        <h2>About Dhaka</h2>
                        <ul class="page-title-link">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About Dhaka</a></li>
                        </ul>
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
                        <h4>Map</h4>
                        <h2>Dhaka City Map</h2>
                        <p class="lead">Dhaka city area detail goes here. Dhaka city area detail goes here. Dhaka city area detail goes here. Dhaka city area detail goes here.
                            Dhaka city area detail goes here. Dhaka city area detail goes here. Dhaka city area detail goes here. Dhaka city area detail goes here. Dhaka city area detail goes here.
                            Dhaka city area detail goes here. Dhaka city area detail goes here. Dhaka city area detail goes here. </p>

                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=dhaka&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                </iframe>
                            </div>
                            <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
                        </div>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="hr1">
            <div class="row">
                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('assets/frontend/uploads/dhaka_city/old_dhaka1.jpg') }}" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="message-box">
                        <h4>History</h4>
                        <h2>History of Dhaka city</h2>
                        <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>

                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo.
                            Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sedInteger rutrum ligula eu dignissim laoreet.

                        </p>

                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->
            <hr class="hr1">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>Details</h4>
                        <h2>Details of Dhaka City</h2>
                        <p class="lead">Dhaka City population, people nature, rivers, etc. Dhaka City population, people nature, rivers, etc.Dhaka City population, people nature, rivers, etc.
                            Dhaka City population, people nature, rivers, etc.Dhaka City population, people nature, rivers, etc.Dhaka City population, people nature, rivers, etc.
                            Dhaka City population, people nature, rivers, etc.Dhaka City population, people nature, rivers, etc.Dhaka City population, people nature, rivers, etc.
                            Dhaka City population, people nature, rivers, etc.Dhaka City population, people nature, rivers, etc.Dhaka City population, people nature, rivers, etc.
                            Dhaka City population, people nature, rivers, etc.Dhaka City population, people nature, rivers, etc.Dhaka City population, people nature, rivers, etc.
                        </p>

                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('assets/frontend/uploads/dhaka_city/old_dhaka1.jpg') }}" alt="" class="img-responsive img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
@endsection

@push('js')

@endpush
