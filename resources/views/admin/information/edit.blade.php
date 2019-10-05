@extends('layouts.backend.app')

@section('title', 'Information')

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
                        Information Edit
                    </h2>
                </div>
                <div class="body">
                    <form method="POST" action="{{ route('admin.information.update') }}" enctype="multipart/form-data">
                        @csrf
                        <label for="man">Total Man</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" id="man" name="man" class="form-control" value="{{ $information->man }}">
                            </div>
                        </div>
                        <label for="woman">Total Woman</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" id="woman" name="woman" class="form-control" value="{{ $information->woman }}">
                            </div>
                        </div>
                        <label for="people">Total People</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" id="people" name="people" class="form-control" value="{{ $information->people }}">
                            </div>
                        </div>
                        <label for="place">Visiting place</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" id="place" name="place" class="form-control" value="{{ $information->place }}">
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
