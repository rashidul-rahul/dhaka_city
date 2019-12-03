@extends('layouts.backend.app')

@section('title', 'Content')

@push('css')
    <link href="{{ asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="row clearfix">
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <div class="card">
                        <div class="header bg-blue">
                            <h2>
                                {{ $complain->title }} <small>{{ $complain->subject }}</small>
                            </h2>

                        </div>
                        <div class="body">
                            <div class="alert alert-success">
                                <h4>
                                    @if($complain->is_complete)
                                        Your complained problem is solved. Thank you for inform us
                                    @elseif($complain->is_complete)
                                        We already seen your Complain. We will take action very soon
                                    @else
                                        We got your complain. We will review your Complain very soon. We are very sorry about that
                                    @endif
                                </h4>
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ Storage::disk('public')->url('complain/'.$complain->image) }}" alt="">
                            </div>
                            <hr>
                            <div>
                                <h3>Description:</h3>
                                <br>
                                <p>{{ $complain->complain }}</p>
                            </div>
                            <hr>
                            <div>
                                <h3>Feedback</h3>
                                @foreach($complain->feedback as $feedback)
                                    @if($feedback->user->role_id == 1 or $feedback->user->role_id == 2)
                                        <div class="alert alert-info">
                                            <small>{{ $feedback->user->username }}-{{ $feedback->created_at->toFormattedDateString() }}</small><br>
                                            {{ $feedback->feedback }}
                                        </div>
                                    @else
                                        <div class="alert alert-warning">
                                            <small>You-{{ $feedback->created_at->toFormattedDateString() }}</small><br>
                                            {{ $feedback->feedback }}
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div>
                                <form action="{{ route('feedback.create') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="complain" value="{{ $complain->id }}">
                                    <div class="form-group">
                                        <textarea class="form-control bg-blue-grey" name="feedback"></textarea>
                                    </div>
                                    <button class="btn btn-success" type="submit">Submit Feedback</button>
                                    <a class="btn btn-danger" href="{{ route('admin.complain.edit', $complain->id) }}">Successfully Solve Problem</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h3>Complain: {{ $complain->name }}</h3>
                    <h4>User Email: {{ $complain->user->email }}</h4>
                    <h4>User Name: {{ $complain->user->name }}</h4>
                </div>
                <div class="card-body">
                    <div>
                        <br>
                        <img src="{{ Storage::disk('public')->url('complain/'.$complain->image) }}" alt="">
                        <p>{{ $complain->complain }}</p>
                    </div>
                    <a href="{{ route('admin.complain.index') }}" class="btn btn-success">Back</a>
                </div>

            </div>
        </div> --}}
    </div>
    <!-- #END# Basic Examples -->
@endsection

@push('js')
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <script src="{{ asset('assets/backend/js/pages/tables/jquery-datatable.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
@endpush
