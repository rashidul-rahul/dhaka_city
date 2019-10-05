@extends('layouts.backend.app')

@section('title', 'Content')

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
                               Add Notice
                            </h2>
                        </div>
                        <div class="body">
                            <form method="POST" action="{{ route('admin.content.store') }}" enctype="multipart/form-data">
                                @csrf
                                <label for="name">Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter Content name">
                                    </div>
                                </div>
                                <label for="category_id">Category</label>
                                <select name="" id="">
                                    <option value="">ad</option>
                                    <option value="">ad</option>
                                    <option value="">ad</option>

                                </select>
                                <label for="content">Content</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea class="form-control" name="content" id="content" cols="20" rows="10" placeholder="Describe The Content...">

                                        </textarea>
                                    </div>
                                </div>
                                <label for="image">Image</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" id="image" name="image" class="form-control">
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
