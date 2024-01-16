@extends('portal.app')

@section('title', 'Roles')

@section('breadcrumbs')
    {{ Breadcrumbs::render('portal.role.create') }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-md-6 mx-auto">
            <div class="card card-gray">
                <div class="card-body">
                    <form action="{{ route('portal.role.store') }}" method="POST">
                        @csrf
                        <x-form.input.with-label label="Name" name="name" placeholder="i.e. director" required="required" hint="Note: You won't be able to change it later" />
                        <x-form.input.with-label label="Display Name" name="displayname" placeholder="i.e. Director of ACT"  />
                        <x-form.textarea.with-label label="Description" name="description" placeholder="Enter..." />

                        <x-form.button label="Create" class="btn-primary px-3"/>
                        <x-form.button label="Cancel" type="cancel" class="btn-secondary px-3"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
