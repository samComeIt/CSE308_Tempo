<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/main.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>
<body>
    <header id="header">
        @guest
        <a class="logo" href="{{ route('login') }}">TEMPO</a>
        <nav>
            <a href="{{ route('login') }}">Login</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
        </nav>
        @else
        @csrf
        <a class="logo" href="/home">TEMPO</a>
        <nav>
            <a href="#">User Manual</a>
            <a href="#">My Page</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
        </nav>
        @endguest
        
    </header>
    <div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
