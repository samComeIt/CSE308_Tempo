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
                    <div class="content">
                        <div class="content" style="padding:0px">
                            <label for="email" style="font-size: 120%">
                            {{ __('EMAIL') }}
                            </label>
                            <div class="content" style="padding:0px">
                                <input type="email" name="email" id="email" value="" required placeholder="Email" />
                            </div>
                        </div>
                        <div class="content" style="padding:0px">
                            <label for="password" style="font-size: 120%">
                            {{ __('PASSWORD') }}
                            </label>
                            <div class="content" style="padding:0px">
                                <input type="password" name="password" id="password" value="" required placeholder="Password" />
                            </div>
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
