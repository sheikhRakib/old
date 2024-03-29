@extends('auth.app')

@section('content')
    <div class="card-body">
        <p class="login-box-msg">You've been invited to register</p>

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <x-form.input.with-icon name='name' label='Full Name' icon='fa-user' />
            <x-form.input.with-icon name='email' label='Email Address' icon='fa-envelope' type='email' value="{{ $invitation->email }}" disabled='readonly' />
            <x-form.input.with-icon name='password' label='Password' icon='fa-lock' type='password' />
            <x-form.input.with-icon name='password_confirmation' id='confirm_password' label='Retype Password' icon='fa-lock' type='password' />

            <div class="row">
                <div class="col-8"></div>
                <div class="col-4">
                    <x-form.button label="Sign In" class="btn-primary btn-block" />
                </div>
            </div>
        </form>
    </div>
@endsection
