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
<body>
<div class="bg-dark px-5">
    @if (Route::has('login'))
        <div class="px-6 py-4 d-flex justify-content-end">
            @auth
                <a href="{{ url('/dashboard') }}"
                   class="text-white mx-5 btn btn-outline-primary">Dashboard</a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button :href="route('logout')" class="btn btn-outline-danger"
                                     onclick="event.preventDefault();
                                            this.closest('form').submit();">
                        Log Out
                    </button>
                </form>

            @else
                <a href="{{ route('login') }}" class="text-white mx-2 btn btn-outline-secondary">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-white mx-4 btn btn-outline-secondary">Register</a>
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
