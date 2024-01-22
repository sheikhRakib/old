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
        <div class="row">
            <div class="col-md-3 mr-3">
                <div class="card card-widget widget-user-2 shadow-sm">
                    <div class="widget-user-header bg-gray">
                        <div class="widget-user-image">
                            <img class="img-circle elevation-2"
                                src="https://ui-avatars.com/api/?bold=true&color=272a6b&name={{ Auth::user()->name ?? 'Full Name' }}"
                                alt="User Avatar">
                        </div>
                        <h3 class="widget-user-username">{{ Auth::user()->name }}</h3>
                        <h5 class="widget-user-desc">{{ Auth::user()->designation }}</h5>
                    </div>
                    <div class="card-footer p-0">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    [Demo] Projects <span class="float-right badge bg-primary">31</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    [Demo] Tasks <span class="float-right badge bg-info">5</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    [Demo] Completed Projects <span class="float-right badge bg-success">12</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mx-5">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Edit Personal Information</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user-profile-information.update') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <x-form.input.with-label name='name' label='Name' placeholder="Full Name" value="{{ Auth::user()->name ?? '' }}" />
                            <x-form.input.with-label name='email' label='Email' placeholder="you@example.com" value="{{ Auth::user()->email ?? '' }}" />
                            <x-form.input.with-label name='banner' label='Banner' placeholder="900XXXXXX" value="{{ Auth::user()->banner }}" />
                            <x-form.button type="submit" label="Update Profile" class="btn-success" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
@endpush
