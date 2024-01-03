@extends('auth.app')

@section('content')
    <div class="card-body">
        <p class="login-box-msg">You've been invited to register</p>

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <x-auth.input name='name' label='Full Name' icon='fa-user'/>
            <x-auth.input name='email' label='Email Address' icon='fa-envelope' type='email' value="{{ $invitation->email }}" disabled='readonly'/>
            <x-auth.input name='password' label='Password' icon='fa-lock' type='password'/>
            <x-auth.input name='password_confirmation' id='confirm_password' label='Retype Password' icon='fa-lock' type='password'/>

            <div class="row">
                <div class="col-8"></div>
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
            </div>
        </form>
    </div>
@endsection
