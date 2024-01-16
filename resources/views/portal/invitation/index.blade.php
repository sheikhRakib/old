@extends('portal.app')

@section('title', 'Invitees')

@section('breadcrumbs')
    {{ Breadcrumbs::render('portal.invitation') }}
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
                        <h3 class="card-title">Invitation List</h3>
                        <a href="{{ route('portal.invitation.create') }}" class="btn btn-sm btn-primary"><i class="fas fa-user-plus"></i> Invite member</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="memberslist" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Invitation Date</th>
                                <th>Email</th>
                                <th>Token</th>
                                <th style="width: 10%">Status</th>
                                <th style="width: 10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($invitations as $invitation)
                                <tr>
                                    <td>{{ $invitation->created_at }}</td>
                                    <td>{{ $invitation->email }}</td>
                                    <td>{{ $invitation->token }}</td>
                                    <td><small class="badge badge-warning">Pending</small></td>
                                    <td>
                                        <div class="btn-group">
                                            <a type="button" class="btn btn-info"><i class="fas fa-share-square"></i></a>
                                            <a class="btn btn-danger" href="#" onclick="if(confirm('Are you sure you want to delete this invitation?')) { event.preventDefault(); document.getElementById('invitation_{{ $invitation->id }}').submit(); } else { event.preventDefault(); }">
                                                <i class="fas fa-trash"></i>
                                            </a>

                                            <form id="invitation_{{ $invitation->id }}" action="{{ Route('portal.invitation.destroy', $invitation->id) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
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
