@extends('portal.app')

@section('title', 'Edit Permission')

@section('breadcrumbs')
    {{ Breadcrumbs::render('portal.permission.edit', $permission) }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-md-6 mx-auto">
            <div class="card card-gray">
                <div class="card-header">
                    <h3 class="card-title">{{ $permission->name }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('portal.permission.update', $permission) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <x-form.input.with-label name="displayname" label="Display Name" placeholder="Permission Name" :value="$permission->displayname" />
                        <x-form.textarea.with-label name="description" label="Description" :value="$permission->description" />

                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="cancel" class="btn btn-secondary">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
