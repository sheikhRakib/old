@extends('portal.app')

@section('title', 'Invite to Join')

@section('breadcrumbs')
    {{ Breadcrumbs::render('portal.invitation.create') }}
@endsection


@section('content')
    <div class="container-fluid">
        <div class="col-md-6 mx-auto">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Invitation Form</h3>
                </div>

                <form action="{{ route('portal.invitation.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <x-form.input.with-label label="Email Address" name="email" placeholder="someone@example.com" />
                        <x-form.button label="Send Invitation" class="btn-primary" />
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
