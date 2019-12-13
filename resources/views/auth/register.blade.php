@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">

<section id="main" class="wrapper">
<div class="inner">
        <div class="content">
            <h1 style="font-family:'Bitter', serif; text-align:center; font-size:60px">Register</h1>
            <div class="inner" style="align:center; display:flex; margin-top:50px; justify-content:center; align-items:center">
                <form method="POST" action="{{ route('register') }}" style="width:60%">
                        @csrf

                        <div class="form-input" style="margin-bottom: 10px;">
                            <label for="name" style="font-size: 120%">{{ __('Name') }}</label>
                            <div class="form-input" style="margin-bottom: 10px;">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input type ="hidden" id ="penalty_status" name="penalty_status" value ="0">
                            </div>
                        </div>

                        <div class="form-input" style="margin-bottom: 10px;">
                            <label for="email" style="font-size: 120%">{{ __('E-Mail Address') }}</label>
                            <div class="form-input" style="margin-bottom: 10px;">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-input" style="margin-bottom: 10px;">
                            <label for="role" style="font-size: 120%">Role</label>
                            <div class="form-input" style="margin-bottom: 10px;">
                                <input type="radio" name="role" id="student" value="student" required>
                                <label for="student">Student</label>
                            </div>
                            <div class="form-input" style="margin-bottom: 10px;">
                                <input type="radio" name="role" id="staff" value="staff">
                                <label for="staff">Staff</label>
                            </div>
                        </div>

                        <div class="form-input" style="margin-bottom: 10px;">
                            <label for="password" style="font-size: 120%">{{ __('Password') }}</label>
                            <label for="password" style="font-size: 100%; color: #9796A6">(at least 8 characters)</label>
                            <div class="form-input" style="margin-bottom: 10px;">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-input" style="margin-bottom: 10px;">
                            <label for="password-confirm" style="font-size: 120%">{{ __('Confirm Password') }}</label>
                            <div class="form-input" style="margin-bottom: 10px;">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password">
                            </div>
                        </div>

                    <div class="form-input">
                        <div class="content">
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
