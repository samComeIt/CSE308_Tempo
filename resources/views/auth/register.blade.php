@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">

<section id="main" class="wrapper">
    <div class="inner">
        <div class="content">
            <h1 style="font-family:'Bitter', serif; text-align:center; font-size:60px">Register</h1>
            <div class="row" style="align:center; margin-top:50px; display:flex; justify-content:center; align-items:center">
                <form style="width:50%" method="post" action="{{ route('register') }}">
                @csrf
                    <div class="col-12">
                        <label for="name" style="font-size: 120%">Name</label>
                        <div class="col-12">
                            <input type="text" name="name" id="name" value="" placeholder="Name" /><br>
                        </div>

                        <label for="email" style="font-size: 120%">Email</label>
                        <div class="col-12">
                            <input type="text" name="email" id="email" value="" placeholder="E-mail" /><br>
                        </div>

                        
                        <label for="role" style="font-size: 120%">Role</label>
                        <div class="col-12">

                            <input type="radio" name="role" id="student" value="student"/>
                            <label for="student">Student</label>
                        </div>
                        <div class="col-12" style="margin-bottom:15px">
                            <input type="radio" name="role" id="staff" value="staff"/>

                            <label for="staff">Staff</label>
                        </div>

                        <label for="password" style="font-size: 120%">Password</label>
                        <div class="col-12">
                            <input type="password" name="password" id="password" value="" placeholder="Password" /><br>
                        </div>

                        <label for="password-confirm" style="font-size: 120%">Confirm Password</label>
                        <div class="col-12">
                            <input type="password" name="password-confirm" id="password-confirm" value="" placeholder="Password" /><br>
                        </div>

                        <ul class="actions">
                            <li>
                                <button style="width:100%" type="submit" >
                                    Register
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
