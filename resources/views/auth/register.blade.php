@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">

<section id="main" class="wrapper">
<div class="inner">
        <div class="content">
            <h1 style="font-family:'Bitter', serif; text-align:center; font-size:60px">Register</h1>
            <div class="row" style="align:center; margin-top:50px; display:flex; justify-content:center; align-items:center">
                <form method="POST" action="{{ route('register') }}" style="width:50%">
                        @csrf

                        <div class="col-12">
                            <label for="name" style="font-size: 120%">{{ __('Name') }}</label>
                            <div class="col-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input type ="hidden" id ="penalty_status" name="penalty_status" value ="0">
                            </div>
                        </div><br>

                        <div class="col-12">
                            <label for="email" style="font-size: 120%">{{ __('E-Mail Address') }}</label>
                            <div class="col-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>

                        <div class="col-12">
                            <label for="role" style="font-size: 120%">Role</label>
                            <div class="col-12">
                                <input type="radio" name="role" id="student" value="student">
                                <label for="student">Student</label>
                            </div>
                            <div class="col-12" style="margin-bottom:15px">
                                <input type="radio" name="role" id="staff" value="staff">
                                <label for="staff">Staff</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="password" style="font-size: 120%">{{ __('Password') }}</label>
                            <div class="col-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>

                        <div class="col-12">
                            <label for="password-confirm" style="font-size: 120%">{{ __('Confirm Password') }}</label>
                            <div class="col-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password">
                            </div>
                        </div><br>

                    <div class=content>
                        <div class="col-12">
                                <button type="submit" style="width:100%">
                                    {{ __('Register') }}
                                </button>
                        </div>
                    </div>
                    </form>
            </div>
    </div>
</div>
</section>
@endsection
