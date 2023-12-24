@extends('portal.app')

@section('title', 'Employees')

@section('breadcrumbs')
    {{ Breadcrumbs::render('portal.employee') }}
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('vendor/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@push('js')
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Member List</h3>
                        <a href="{{ route('portal.employee.invite') }}" class="btn btn-sm btn-primary"><i class="fas fa-user-plus"></i> Invite member</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="memberslist" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>900#</th>
                                <th>Designation</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Jose Farnandez</td>
                                <td>user@nmt.edu</td>
                                <td>900123456</td>
                                <td>Director</td>
                                <td><small class="badge badge-success">active</small></td>
                                <td>
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                        <a type="button" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                        <a type="button" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Peter Mertinez</td>
                                <td>user@nmt.edu</td>
                                <td>900123456</td>
                                <td>Lead Classroom Specialist</td>
                                <td><small class="badge badge-success">active</small></td>
                                <td>
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                        <a type="button" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                        <a type="button" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Curtis Warren</td>
                                <td>user@nmt.edu</td>
                                <td>900123456</td>
                                <td>LMS Specialist</td>
                                <td><small class="badge badge-success">active</small></td>
                                <td>
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                        <a type="button" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                        <a type="button" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Gabriel</td>
                                <td>user@nmt.edu</td>
                                <td>900123456</td>
                                <td>Technology Specialist</td>
                                <td><small class="badge badge-success">active</small></td>
                                <td>
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                        <a type="button" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                        <a type="button" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Rakibul Islam</td>
                                <td>user@nmt.edu</td>
                                <td>900123456</td>
                                <td>Student Support Tech</td>
                                <td><small class="badge badge-danger">inactive</small></td>
                                <td>
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                        <a type="button" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                        <a type="button" class="btn btn-success"><i class="fas fa-check-square"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Sonya Torres</td>
                                <td>user@nmt.edu</td>
                                <td>900123456</td>
                                <td>Support Tech</td>
                                <td><small class="badge badge-success">active</small></td>
                                <td>
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                        <a type="button" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                        <a type="button" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Cheyenne Benavidez</td>
                                <td>user@nmt.edu</td>
                                <td>900123456</td>
                                <td>Support Admin</td>
                                <td><small class="badge badge-success">active</small></td>
                                <td>
                                    <div class="btn-group">
                                        <a type="button" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                        <a type="button" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                        <a type="button" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('script')
    <script>
        $(function() {
            $('#memberslist').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
