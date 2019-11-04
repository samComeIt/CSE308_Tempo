@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Didact+Gothic" />
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">

<section id="main" class="wrapper">
    <div class="inner">
        <div class="content">
            <h1 style="font-family:'Bitter', serif; text-align:center">TEMPO</h1>
            <div class="content" style="display:flex; justify-content:center; align-items:center">
                <form method="post" style="width:500px" action="{{ route('login') }}">
                    @csrf
                    
                    <div class="header">
                        <label for="email" style="font-size: 100%">
                        {{ __('EMAIL') }}
                        </label>
                        <div class="content">
                            <input type="email" name="email" id="email" value="" placeholder="Email" />
                        </div>
                        
                        <label for="email" style="font-size: 100%">
                        {{ __('PASSWORD') }}
                        </label>
                        <div class="content">
                            <input type="password" name="password" id="password" value="" placeholder="Password" />
                        </div>
                        <div class="content">
                            <button style="width:100%" type="submit" >
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
