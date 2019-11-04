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
                <h3>All Notice</h3>
                <p class="lead">You found every notice about this city</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <table class="table bg-light">
                        <thead>
                        <tr>
                            <th scope="col">Serial</th>
                            <th scope="col">Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">View</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($notices as $key=>$notice)
                            <tr>
                                <th scope="row">{{ $key+1 }}</th>
                                <td>{{ $notice->name }}</td>
                                <td>{{ $notice->created_at->toFormattedDateString() }}</td>
                                <td><a class="btn btn-success" href="{{ route("notice.view")."?id=".$notice->id }}"><i class="material-icons">visibility</i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!-- end row -->

            <hr class="hr1">
            <!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
@endsection

@push('js')

@endpush
