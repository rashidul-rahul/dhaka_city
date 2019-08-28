@extends('layouts.backend.app')

@section('title', 'Category')

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
                        Add Category
                    </h2>
                </div>
                <div class="body">
                    <form method="POST" action="{{ route('admin.category.update', $category->id) }}">
                        @csrf
                        @method('PUT')
                        <label for="name">Name</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter category name" value="{{ $category->name }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Vertical Layout -->
@endsection

@push('js')


@endpush
