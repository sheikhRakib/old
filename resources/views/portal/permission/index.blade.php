@extends('portal.app')

@section('title', 'Permissions')

@section('breadcrumbs')
    {{ Breadcrumbs::render('portal.permission') }}
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
                <div class="card-body">
                    <table id="memberslist" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Permission</th>
                                <th>Display Name</th>
                                <th>Description</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($permissions as $permission)
                                <tr>
                                    <td>{{ $permission->name }}</td>
                                    <td>{{ $permission->displayname ?? '-' }}</td>
                                    <td>{{ $permission->description ?? '-' }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('portal.permission.edit', $permission->id) }}" type="button" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No Data Found</td>
                                </tr>
                            @endforelse
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
