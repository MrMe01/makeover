<!DOCTYPE html>
<html>
<head>
    <title>Makeover</title>
    <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>

    @yield('resources')
</head>
<body>
    <div class="container">
        <hr>
        @yield('content')
    </div>
</body>
</html>
