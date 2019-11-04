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
@endsection
