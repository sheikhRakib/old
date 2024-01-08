@extends('portal.app')

@section('title', 'Roles')

@section('breadcrumbs')
    {{ Breadcrumbs::render('portal.role.edit', $role) }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-md-6 mx-auto">
            <div class="card card-gray">
                <div class="card-body">
                    <form action="{{ route('portal.role.update', $role) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <x-form.label.input label="Display Name" name="displayname" placeholder="i.e. Director of ACT" :value="$role->displayname" />
                        <x-form.label.text-area label="Description" name="description" placeholder="Enter..." :value="$role->description" />

                        <x-form.button label="Update" class="btn-primary px-3" />
                        <x-form.button label="Cancel" type="cancel" class="btn-secondary px-3" />
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
