@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Didact+Gothic" />
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">
<style>
.flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                font-size: 20px;
            }
	
</style>

<section id="main" class="wrapper">
    <div class="inner">
        <div class="content">
            <h1 style="font-family:'Bitter', serif; text-align:center">TEMPO</h1>
            <div class="row" style="align:center">
                <form method="post" action="{{ route('login') }}">
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
                        <ul class="actions">
                            <li>
                                <button type="submit" >
                                    {{ __('Login') }}
                                </button>
                            </li>                            
                        </ul>    
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
