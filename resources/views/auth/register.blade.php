@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">

<section id="main" class="wrapper">
    <div class="inner">
        <div class="content">
            <h2 style="font-family:'Bitter', serif; text-align:center">TEMPO Register</h2>
            <div class="row" style="align:center">
                <div class="col-12">
                    <label for="name" style="font-size: 100%">
                        {{ __('Name') }}
                    </label>
                    <div class="col-12">
                        <input type="text" name="name" id="name" value="" placeholder="Name" /><br>
                    </div>
                    
                    <label for="email" style="font-size: 100%">
                        {{ __('E-mail') }}
                    </label>
                    <div class="col-12">
                        <input type="text" name="email" id="email" value="" placeholder="E-mail" /><br>
                    </div>
                    
                    <label for="role" style="font-size: 100%">
                        {{ __('Role') }}
                    </label>
                    <div class="col-12">
                        <input type="radio" name="radio" id="student"/>
                        <label for="student">Student</label>
                    </div>
                    <div class="col-12">
                        <input type="radio" name="radio" id="staff"/>
                        <label for="staff">Staff</label>
                    </div>
                        
                    <label for="password" style="font-size: 100%">
                        {{ __('Password') }}
                    </label>
                    <div class="col-12">
                        <input type="password" name="password" id="password" value="" placeholder="Password" /><br>
                    </div>
                    
                    <label for="password-confirm" style="font-size: 100%">
                        {{ __('Confirm Password') }}
                    </label>
                    <div class="col-12">
                        <input type="password" name="password-confirm" id="password-confirm" value="" placeholder="Password" /><br>
                    </div>
                    
                    <ul class="actions">
                        <li>
                            <button type="submit" >
                                {{ __('Register') }}
                            </button>
                        </li>                            
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
