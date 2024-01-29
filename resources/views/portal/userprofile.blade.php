@extends('portal.app')

@section('title', 'Profile')

@section('breadcrumbs')
    {{ Breadcrumbs::render('portal.profile') }}
@endsection

@push('css')
@endpush

@push('js')
@endpush

@section('content')
    <div class="container-fluid">
        <div class="card card-widget widget-user">
            <div class="widget-user-header bg-olive">
                <h3 class="widget-user-username">{{ Auth::user()->name }}</h3>
                <h5 class="widget-user-desc">{{ Auth::user()->designation }}</h5>
            </div>
            <div class="widget-user-image">
                <img class="img-circle elevation-2"
                    src="https://ui-avatars.com/api/?bold=true&color=272a6b&name={{ Auth::user()->name ?? 'Full Name' }}"
                    alt="User Avatar">
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header">0</h5>
                            <span class="description-text">PROJECTS</span>
                        </div>
                    </div>
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header">0</h5>
                            <span class="description-text">TASKS</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="description-block">
                            <h5 class="description-header">0</h5>
                            <span class="description-text">PRODUCTS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Edit Personal Information</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user-profile-information.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <x-form.input.with-label name='name' label='Name' placeholder='Full Name'
                                value="{{ Auth::user()->name ?? '' }}" />
                            <x-form.input.with-label name='email' label='Email' type='email'
                                placeholder='you@example.com' value="{{ Auth::user()->email ?? '' }}" />
                            <x-form.input.with-label name='banner' label='Banner' placeholder="900XXXXXX"
                                value="{{ Auth::user()->banner }}" />
                            <x-form.button type="submit" label="Update Profile" class="btn-primary" />
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Update Password</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user-password.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <x-form.input.with-label name='current_password' type="password" label='Current Password'
                                placeholder="Current Password" />
                            <x-form.input.with-label name='password' type="password" label='New Password'
                                placeholder="New Password" />
                            <x-form.input.with-label name='password_confirmation' type="password" label='Confirm Password'
                                placeholder="Confirm Password" />

                            <x-form.button type="submit" label="Update Password" class="btn-secondary" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
@endpush
