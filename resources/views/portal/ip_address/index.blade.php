@extends('portal.app')

@section('title', 'Buildings')

@section('breadcrumbs')
    {{ Breadcrumbs::render('portal.building') }}
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
                        <h3 class="card-title">Internet Protocol Addresses</h3>
                        <a href="{{ route('portal.ipAddress.create') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Add New Building</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="memberslist" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($ipAddresses as $ipAddress)
                                <tr>
                                    <td>{{ $ipAddress->ipv4 }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a type="button" class="btn btn-info" href="{{ route('portal.ipAddress.show', $ipAddress->id) }}"><i class="fas fa-eye"></i></a>
                                            <a type="button" class="btn btn-warning" href="{{ route('portal.ipAddress.edit', $ipAddress->id) }}"><i class="fas fa-edit"></i></a>
                                            <a class="btn btn-danger" href="#" onclick="if(confirm('Are you sure you want to delete this IP Address?')) { event.preventDefault(); document.getElementById('ipAddress_{{ $ipAddress->id }}').submit(); } else { event.preventDefault(); }">
                                                <i class="fas fa-trash"></i>
                                            </a>

                                            <form id="ipAddress_{{ $ipAddress->id }}" action="{{ Route('portal.ipAddress.destroy', $ipAddress->id) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2">No Data Found</td>
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
