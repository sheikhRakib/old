@extends('portal.app')

@section('title', 'Employees')

@section('breadcrumbs')
    {{ Breadcrumbs::render('portal.employee') }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Members</h3>
                </div>
                <div class="card-body p-0">
                    <ul class="users-list clearfix">
                        <li>
                            <img class="img-circle elevation-2" src="https://ui-avatars.com/api/?bold=true&color=272a6b&name=Jose Farnandez" alt="User Avatar">
                            <a class="users-list-name" href="#">Jose Farnandez</a>
                            <span class="users-list-date">Director</span>
                        </li>
                        <li>
                            <img class="img-circle elevation-2" src="https://ui-avatars.com/api/?bold=true&color=272a6b&name=Peter Mertinez" alt="User Avatar">
                            <a class="users-list-name" href="#">Peter Mertinez</a>
                            <span class="users-list-date">Lead Classroom Specialist</span>
                        </li>
                        <li>
                            <img class="img-circle elevation-2" src="https://ui-avatars.com/api/?bold=true&color=272a6b&name=Curtis Warren" alt="User Avatar">
                            <a class="users-list-name" href="#">Curtis Warren</a>
                            <span class="users-list-date">LMS Specialist</span>
                        </li>
                        <li>
                            <img class="img-circle elevation-2" src="https://ui-avatars.com/api/?bold=true&color=272a6b&name=Gabriel" alt="User Avatar">
                            <a class="users-list-name" href="#">Gabriel</a>
                            <span class="users-list-date">Technology Specialist</span>
                        </li>
                        <li>
                            <img class="img-circle elevation-2" src="https://ui-avatars.com/api/?bold=true&color=272a6b&name=Rakibul Islam" alt="User Avatar">
                            <a class="users-list-name" href="#">Rakibul Islam</a>
                            <span class="users-list-date">Student Support Tech</span>
                        </li>
                        <li>
                            <img class="img-circle elevation-2" src="https://ui-avatars.com/api/?bold=true&color=272a6b&name=Sonya Torres" alt="User Avatar">
                            <a class="users-list-name" href="#">Sonya Torres</a>
                            <span class="users-list-date">Support Tech</span>
                        </li>
                        <li>
                            <img class="img-circle elevation-2" src="https://ui-avatars.com/api/?bold=true&color=272a6b&name=Cheyenne Benavidez" alt="User Avatar">
                            <a class="users-list-name" href="#">Cheyenne Benavidez</a>
                            <span class="users-list-date">Support Admin</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
