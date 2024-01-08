@extends('portal.app')

@section('title', 'Edit Permission')

@section('breadcrumbs')
    {{ Breadcrumbs::render('portal.permissions.edit', $permission) }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-md-6 mx-auto">
            <div class="card card-gray">
                <div class="card-header">
                    <h3 class="card-title">{{ $permission->name }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('portal.permissions.update', $permission) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Display Name</label>
                            <input type="text" name="displayname" class="form-control" placeholder="Enter ..." value="{{ $permission->displayname }}">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="5" placeholder="Enter ...">{{ $permission->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="cancel" class="btn btn-secondary">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
