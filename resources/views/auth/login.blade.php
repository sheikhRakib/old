@extends('auth.app')

@section('content')
    <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <x-auth.input name='email' label='Email Address' icon='fa-envelope' type='email'/>
            <x-auth.input name='password' label='Password' icon='fa-lock' type='password'/>

            <div class="row">
                <div class="col-8 mb-0 pt-3">
                    <a href="forgot-password.html">I forgot my password</a>
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
            </div>
        </form>
    </div>
@endsection
