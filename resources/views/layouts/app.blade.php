<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bioscoop')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <nav>
            <a href="/">Home</a>
            @auth
            <a href="/dashboard">Dashboard</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Uitloggen</button>
            </form>
            @else
            <a href="{{ route('login') }}">Inloggen</a>
            <a href="{{ route('register') }}">Registreren</a>
            @endauth
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>