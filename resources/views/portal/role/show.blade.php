@extends('portal.app')

@section('title', 'Roles')

@section('breadcrumbs')
    {{ Breadcrumbs::render('portal.role.show', $role) }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">
                            <i class="fas fa-text-width"></i>
                            {{ $role->displayname ?? $role->name }}
                        </h3>
                        <a href="{{ route('portal.role.edit', $role) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                            Update Role
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-4">Name</dt>
                        <dd class="col-sm-8">{{ $role->name }}</dd>
                        <dt class="col-sm-4">Display Name</dt>
                        <dd class="col-sm-8">{{ $role->displayname ?? '-' }}</dd>
                        <dt class="col-sm-4">Description</dt>
                        <dd class="col-sm-8">{{ $role->description ?? '-' }}</dd>
                        <dt class="col-sm-4">Permissions</dt>
                        <dd class="col-sm-8">-</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
@endsection
