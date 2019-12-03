@extends('layouts.backend.app')

@section('title', 'User')

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
                        All User
                        
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($users as $key=>$user)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role->name }}</td>
                                <td>{{ $user->created_at == null ? '':$user->created_at->toFormattedDateString() }}</td>
                                <td>
                                    <button onclick="{{ $user->role_id == 1? "":"event.preventDefault();
                                                     document.getElementById('admin-form').submit();" }}" class="btn btn-info waves-effect {{ $user->role_id == 1? 'disabled':'' }}" href="">Admin</button>
                                    <form id="admin-form" style="display: none;" action="{{ route('admin.user.role') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $user->id }}" name="userId">
                                        <input type="hidden" value="1" name="role">
                                    </form>
                                    <button onclick="{{ $user->role_id == 2? "":"event.preventDefault();
                                                     document.getElementById('moderator-form').submit();" }}" class="btn btn-info waves-effect {{ $user->role_id == 2? 'disabled':'' }}" href="">Moderator</button>
                                    <form id="moderator-form" style="display: none;" action="{{ route('admin.user.role') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $user->id }}" name="userId">
                                        <input type="hidden" value="2" name="role">
                                    </form>
                                    <button onclick="{{ $user->role_id == 3? "":"event.preventDefault();
                                                     document.getElementById('user-form').submit();" }}" class="btn btn-info waves-effect {{ $user->role_id == 3? 'disabled':'' }}" href="">User</button>
                                    <form id="user-form" style="display: none;" action="{{ route('admin.user.role') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $user->id }}" name="userId">
                                        <input type="hidden" value="3" name="role">
                                    </form>
                                    <button class="btn btn-danger waves-effect" onclick="deleteUser({{ $user->id }})"><i class="material-icons">delete</i></button>
                                    <form style="display: none" method="POST" action="{{ route('admin.user.destroy', $user->id) }}" id="delete-user-{{ $user->id }}">@csrf @method('DELETE')</form>
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
        function deleteUser(id){
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
                    document.getElementById('delete-user-'+id).submit();
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
