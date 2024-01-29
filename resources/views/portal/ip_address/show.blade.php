@extends('portal.app')

@section('title', 'Buildings')

@section('breadcrumbs')
    {{ Breadcrumbs::render('portal.building.show', $building) }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">
                            <i class="fas fa-text-width"></i>
                            {{ $building->name }}
                        </h3>
                        <a href="{{ route('portal.building.edit', $building) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i>
                            Update Building Information
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-4">Name</dt>
                        <dd class="col-sm-8">{{ $building->name }}</dd>
                        <dt class="col-sm-4">Classrooms</dt>
                        <dd class="col-sm-8">-</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
@endsection
