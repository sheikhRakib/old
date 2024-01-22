@extends('portal.app')

@section('title', 'Buildings')

@section('breadcrumbs')
    {{ Breadcrumbs::render('portal.building.create') }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-md-4 mx-auto mt-5">
            <div class="card card-gray">
                <div class="card-body">
                    <form action="{{ route('portal.building.store') }}" method="POST">
                        @csrf
                        <x-form.input.with-label label="Name" name="name" placeholder="i.e. Cramer" required="required" />

                        <x-form.button label="Create" class="btn-primary px-3"/>
                        <x-form.button label="Cancel" type="cancel" class="btn-secondary px-3"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
