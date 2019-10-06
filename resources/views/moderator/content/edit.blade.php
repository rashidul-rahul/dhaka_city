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
                        {{ $content->name }}
                    </h2>
                </div>
                <div class="body">
                    <form method="POST" action="{{ route('moderator.content.update', $content->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <label for="name">Name</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="name" name="name" class="form-control" value="{{ $content->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="category_id" id="categogy_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" class="{{ $category->id==$content->category_id?'checked':'' }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="clearfix"></div>
                        <label for="content">Content</label>
                        <div class="form-group">
                            <div class="form-line">
                                <textarea class="form-control" name="content" id="content" cols="20" rows="10" placeholder="Describe The Content...">{{ $content->content }}</textarea>
                            </div>
                        </div>
                        <label for="image">Image</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="file" id="image" name="image" class="form-control">
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
