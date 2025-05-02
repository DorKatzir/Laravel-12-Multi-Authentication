<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">


        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/css/styles.css', 'resources/js/app.js'])
        @endif

        <title> Laravel 12 - @yield('title', '') </title>

    </head>
    <body>

        <header>
            <nav class="">
                <a class="nav-item current" href="{{ route('home') }}">Home</a>
                <a class="nav-item" href="{{ route('about') }}">About</a>
                <a class="nav-item" href="{{ route('contact') }}">Contact</a>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <p><small>© {{ date('Y') }} <strong>Dror.K.Harvest</strong> </small></p>
        </footer>

</body>
</html>
