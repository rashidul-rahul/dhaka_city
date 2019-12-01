@extends('layouts.backend.app')

@section('title', 'Notice')

@push('css')
    <link href="{{ asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
@endpush

@section('content')

    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        {{ $notice->name }}
                    </h2>
                </div>
                <div class="body">
                    <iframe style="position:relative;width:100%;height:800px;" src="{{ Storage::disk('public')->url('notices/'.$notice->link) }}"></iframe>
                    <a href="{{ route("user.notice.index") }}" class="btn btn-info">Back</a>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Vertical Layout -->
@endsection

@push('js')


@endpush
