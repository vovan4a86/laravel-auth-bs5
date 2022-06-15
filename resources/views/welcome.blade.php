<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div class="bg-dark">
    @if (Route::has('login'))
        <div class="px-6 py-4 d-flex justify-content-end">
            @auth
                <a href="{{ url('/dashboard') }}"
                   class="text-white mx-4">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-white mx-2">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-white mx-4">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>
<div class="container">
    <div class="content mt-2">
        <h1>Главная страница</h1>

    </div>
</div>
</body>
</html>
