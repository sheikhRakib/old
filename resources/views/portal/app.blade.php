<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} | Portal</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/ionicons/ionicons.min.css') }}">
    @stack('css')
    <link rel="stylesheet" href="{{ asset('vendor/adminLTE/css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <x-portal.navbar />
        <x-portal.sidebar />

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('title', 'Dashboard')</h1>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-sm-right">
                                @yield('breadcrumbs')
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                @include('partials.alert')

                @yield('content')
            </div>
        </div>

        <x-portal.footer />
    </div>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @stack('js')
    <script src="{{ asset('vendor/adminLTE/js/adminlte.js') }}"></script>
    @stack('script')
</body>

</html>
