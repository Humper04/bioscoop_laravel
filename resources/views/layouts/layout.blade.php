<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"> 
    <script src="{{ asset('js/script.js') }}"></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>

<body>
    @include('partials.header')
    <div class="container mt-5">
        @yield('content')
    </div>
    @include('partials.footer')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>