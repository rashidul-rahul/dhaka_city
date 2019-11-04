@extends('layouts.frontend.app')

@section('title', 'Notice')

@push('css')

@endpush

@section('content')
    <div class="banner-area banner-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner">
                        <h2>Features</h2>
                        <ul class="page-title-link">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('notice') }}">Notice</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="features" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>{{ $notice->name }}</h3>
                <p class="lead">Published Date: {{ $notice->created_at->toFormattedDateString() }}</p>
            </div><!-- end title -->
{{--            Storage::disk('public')->url('notices/'.$notice->link)--}}
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                            <iframe style="position:relative;width:100%;height:800px;" src="{{ Storage::disk('public')->url('notices/'.$notice->link) }}"></iframe>
                </div>
            </div><!-- end row -->

            <hr class="hr1">
            <!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
@endsection

@push('js')

@endpush
