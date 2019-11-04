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
    
    <!-- Styles -->
	<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
/*  background-color: #13136b;*/
}

li {
  float: right;
}

ri {
  float: left;
}
        
ri a {

  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

ri a:hover:not(.active) {
  background-color: #3346b0;
}
        
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #3346b0;
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
        <a class="logo" href="/home">TEMPO</a>
        <nav>
            <a href="#">User Manual</a>
            <a href="#">My Page</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
        </nav>
        @endguest
        
    </header>
    
    
    
    
    
    
    
    
<!--
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
-->
<!--
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
-->

<!--                <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
                    <!-- Left Side Of Navbar -->
<!--                    <a class="logo" href="home.blade.php">TEMPO</a>-->
<!--
                    <ul class="navbar-nav mr-auto">
                        <ri class="nav-item" style="font-family:'Bitter', serif">
                            <a class="nav-link" href="{{ route('home') }}">{{ __('TEMPO') }}</a>
                        </ri>
                    </ul>
-->

                    <!-- Right Side Of Navbar -->
<!--
                    <ul class="navbar-nav ml-auto">
                         Authentication Links 
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a id="navbarDropdown" class="nav-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                            </li>
                        
                            <li class="nav-item">
                                @csrf
                                <a class="nav-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Log Out') }}
                                </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('My Page') }}</a>
                            </li>
                        
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('User Manual') }}</a>
                            </li>
                        @endguest
                    </ul>

                </div>
            </div>
        </nav>

-->
        <main class="py-4">
            @yield('content')
        </main>
    

</body>
</html>
