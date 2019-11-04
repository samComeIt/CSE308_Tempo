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
    
.tempoTitle {
				font-family:'Bitter', serif;;
				align-items: center;
				margin-bottom: 30px;
                background-size: 60%;
                padding-top: 80px;
				font-size: 100px;
				justify-content: center;
				font-weight: bold;
                display: flex;
                color: #13136b;
	       }
</style>

<div class="flex-center">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
			 <div class="tempoTitle">
			 TEMPO
			 </div>
                
                <div class="flex-center">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" 
                                   style="font-size: 120%">
                                {{ __('EMAIL') }}
                            </label>
                            <div class="col-md-6" style="font-size: 120%; text-align: left">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus 
                                style="border-radius: 15px 15px 15px 15px; padding: 15px; border: 3px solid #13136b; width: 100%;
                                       font-size: 80%; background: #cfdefa; margin-bottom: 20px">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" 
                                   style="font-size: 120%">
                                {{ __('PASSWORD') }}
                            </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                                style="border-radius: 15px 15px 15px 15px; padding: 15px; border: 3px solid #13136b; width: 100%;
                                font-size: 80%; background: #cfdefa">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" style="padding: 10px 25px; font-size: 80%; border-radius: 25px 25px 25px 25px" >
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
