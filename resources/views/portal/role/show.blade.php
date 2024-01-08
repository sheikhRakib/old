@extends('portal.app')

@section('title', 'Roles')

@section('breadcrumbs')
    {{-- {{ Breadcrumbs::render('portal.permission.edit', $permission) }} --}}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-text-width"></i>
                        {{ $role->displayname ?? $role->name }}
                    </h3>
                </div>
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-4">Name</dt>
                        <dd class="col-sm-8">{{ $role->name }}</dd>
                        <dt class="col-sm-4">displayname</dt>
                        <dd class="col-sm-8">{{ $role->displayname ?? '-' }}</dd>
                        <dt class="col-sm-4">Description</dt>
                        <dd class="col-sm-8">{{ $role->description ?? '-' }}</dd>
                        <dt class="col-sm-4">Permissions</dt>
                        <dd class="col-sm-8">-</dd>
                    </dl>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection
