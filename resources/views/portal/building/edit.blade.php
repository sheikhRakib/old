@extends('portal.app')

@section('title', 'Buildings')

@section('breadcrumbs')
    {{-- {{ Breadcrumbs::render('portal.role.edit', $role) }} --}}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-md-6 mx-auto">
            <div class="card card-gray">
                <div class="card-body">
                    <form action="{{ route('portal.building.update', $building) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <x-form.input.with-label label="Name" name="name" placeholder="i.e. Cramer" :value="$building->name" />

                        <x-form.button label="Update" class="btn-primary px-3" />
                        <x-form.button label="Cancel" type="cancel" class="btn-secondary px-3" />
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
