<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACT @ New Mexico Tech</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/adminLTE/css/adminlte.min.css') }}">
    @stack('css')
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ route('index') }}" class="h1"><b>ACT</b> <i>portal</i></a>
            </div>
            @yield('content')

        </div>
    </div>

    <script src=" {{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/adminLTE/js/adminlte.min.js') }}"></script>
    @stack('js')
    @stack('script')
</body>

</html>
