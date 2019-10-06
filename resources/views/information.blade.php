@extends('layouts.frontend.app')
@section('title', 'Information')
@push('css')
@endpush
@section('content')
<div class="banner-area banner-bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner">
                    <h2>Information</h2>
                    <ul class="page-title-link">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('information') }}">Information</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="portfolio" class="section wb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Information</h3>
            <p class="lead">Here are some important, entertainment, park, mall information</p>
        </div><!-- end title -->
    </div><!-- end container -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="portfolio-filter text-center">
                    <ul>
                        <li><a class="btn btn-dark btn-radius btn-brd active" href="#" data-filter="*"><span class="oi hidden-xs" data-glyph="grid-three-up"></span> All</a></li>
                        @foreach($categories as $category)
                            <li><a class="btn btn-dark btn-radius btn-brd" data-toggle="tooltip" data-placement="top" title="5" href="#" data-filter=".{{ $category->slug }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>

        <hr class="invis">

        <div id="da-thumbs" class="da-thumbs portfolio">
           @foreach($contents as $content)
                <div class="post-media pitem item-w1 item-h1 {{ $content->category->slug }}">
                    <a href="{{ Storage::disk('public')->url('contents/'.$content->image) }}" data-rel="prettyPhoto[gal]">
                        <img src="{{ Storage::disk('public')->url('contents/'.$content->image) }}" alt="" class="img-responsive">
                        <div>
                            <h3>{{ $content->name }} <small>{{ $content->content }}</small></h3>
                            <i class="flaticon-unlink"></i>
                        </div>
                    </a>
                </div>
            @endforeach
        </div><!-- end portfolio -->
    </div><!-- end container -->
</div><!-- end section -->
@endsection
@push('js')
    @endpush
