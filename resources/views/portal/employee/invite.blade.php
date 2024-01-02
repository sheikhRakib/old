@extends('portal.app')

@section('title', 'Invite to Join')

@section('breadcrumbs')
    {{ Breadcrumbs::render('portal.employee.invite') }}
@endsection


@section('content')
    <div class="container-fluid">
        <div class="col-md-6 mx-auto">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Invitation Form</h3>
                </div>

                <form action="{{ route('portal.employee.invite.send') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="someone@example.com">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Send Invitation</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
