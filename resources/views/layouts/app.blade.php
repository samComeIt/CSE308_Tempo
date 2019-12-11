<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/browser.min.js') }}"></script>
    <script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
	<script src="{{ asset('assets/js/util.js') }}"></script>
	<script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Styles -->
	<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
/*  background-color: #13136b;*/
}

.active {
  background-color: #4CAF50;
}
</style>
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>
<body class="is-preload">
    <header id="header">
        @guest
        <a class="logo" href="{{ route('login') }}" style="font-family:'Bitter', serif">TEMPO</a>
        <nav>
            <a href="{{ route('login') }}" style="color:white">Login</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" style="color:white">{{ __('Register') }}</a>
            @endif
        </nav>
        @else
        @csrf
        <a class="logo" href="/home" style="font-family:'Bitter', serif">TEMPO</a>
        <nav>
            <a href="/home" style="color:white">Home</a>
            <a href="/mypage" style="color:white">My Page</a>
            @if(Auth::user()->role == "staff")
            <a href="/message" style="color:white">Request Box</a>
            @endif
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color:white">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
        </nav>
        @endguest

    </header>

        <main class="py-4">
            @yield('content')
        </main>

</body>
</html>
