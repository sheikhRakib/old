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
            <div class="col-md-4">
                <div class="card card-widget widget-user-2 shadow-sm">
                    <div class="widget-user-header bg-gray">
                        <div class="widget-user-image">
                            <img class="img-circle elevation-2"
                                src="https://ui-avatars.com/api/?bold=true&color=272a6b&name={{ Auth::user()->name ?? 'Full Name' }}"
                                alt="User Avatar">
                        </div>
                        <h3 class="widget-user-username">{{ Auth::user()->name }}</h3>
                        <h5 class="widget-user-desc">{{ Auth::user()->roles[0]->displayname ?? 'User' }}</h5>
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

            <div class="col-md-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Edit Personal Information</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST">
                            <x-form.input name='name' label='Full Name' value="{{ Auth::user()->name }}" />

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">900 # </span>
                                </div>
                                <input type="text" name='banner' class="form-control" placeholder="900XXXXXX">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                </div>
                                <input type="email" name='email' class="form-control" placeholder="Email">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-check"></i></span>
                                </div>
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-dollar-sign"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control">
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fas fa-ambulance"></i></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
@endpush
