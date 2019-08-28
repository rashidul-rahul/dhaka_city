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
                    <form method="POST" action="{{ route('admin.notice.update', $notice->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <label for="name">Name</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="name" name="name" class="form-control" value="{{ $notice->name }}">
                            </div>
                        </div>
                        <label for="pdf">Notice pdf File <small>(*Support only pdf)</small></label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="file" id="pdf" name="pdf" class="form-control" placeholder="Enter Notice file">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Vertical Layout -->
@endsection

@push('js')


@endpush
