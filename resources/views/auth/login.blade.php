@extends('auth.app')

@section('content')
    <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <x-form.input.with-icon name='email' label='Email Address' icon='fa-envelope' type='email' />
            <x-form.input.with-icon name='password' label='Password' icon='fa-lock' type='password' />

            <div class="row">
                <div class="col-8 mb-0 pt-3">
                    <a href="#">I forgot my password</a>
                </div>
                <div class="col-4">
                    <x-form.button label="Sign In" class="btn-primary btn-block" />
                </div>
            </div>
        </form>
    </div>
@endsection
