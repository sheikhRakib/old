@extends('portal.app')

@section('title', 'Dashboard')

@section('breadcrumbs')
    {{ Breadcrumbs::render('portal') }}
@endsection

@push('css')
@endpush

@push('js')
@endpush

@section('content')
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">

            </div>
        </div>
    </div>
@endsection

@push('script')
@endpush
