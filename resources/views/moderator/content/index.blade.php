@extends('layouts.backend.app')

@section('title', 'Content')

@push('css')
    <link href="{{ asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        All Content
                        <a href="{{ route('moderator.content.create') }}" class="btn btn-success waves-effect">
                            <i class="material-icons">add</i>
                            <span>Add</span>
                        </a>
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($contents as $key=>$content)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $content->name }}</td>
                                <td>{{ $content->created_at->toFormattedDateString() }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('moderator.content.show', $content->id) }}">
                                        <i class="material-icons">visibility</i>
                                    </a>
                                    <a class="btn btn-info waves-effect" href="{{ route('moderator.content.edit', $content->id) }}"><i class="material-icons">edit</i></a>
                                    <button class="btn btn-danger waves-effect" onclick="deleteContent({{ $content->id }})"><i class="material-icons">delete</i></button>
                                    <form style="display: none" method="POST" action="{{ route('moderator.content.destroy', $content->id) }}" id="delete-content-{{ $content->id }}">@csrf @method('DELETE')</form>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
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

    <script type="text/javascript">
        function deleteContent(id){
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false,
            })
            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-content-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endpush
