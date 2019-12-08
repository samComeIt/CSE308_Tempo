

@extends('layouts.app')
@section('content')
<section id="main" class="wrapper">
    @if($user["penalty_status"] != "3")
    <div class="inner">
        <div class="content">
            <h2 style="font-family:'Bitter', serif; text-align:center; font-size: 60px">TEMPO</h2>
            <h2 style="font-family:'Bitter', serif; text-align:center; font-size: 40px">Online Room Reservation</h2>
            @csrf
            <div class="division">
                <ul class="actions" style="justify-content: center">
                    <li>
                        <a href="/approval" class="button primary"
                        style="background-color: white; text-align: center; color: #13136b; font-size: 30px">Approval</a> 
                    </li>
                </ul>
                <li>Library Study Rooms</li>
            </div>
            
            <div class="division">
                <ul class="actions" style="justify-content: center">
                    <li>
                        <a href="/open" class="button primary"
                        style="background-color: white; text-align: center; color: #13136b; font-size: 30px">Open</a>
                    </li>
                </ul>
                <li>Study Rooms</li>
            </div>
        </div>
    </div>
    @else
    <div style="width: 60%" class="inner">
        <header class="special">

            <h2 style="font-family:'Bitter', serif; text-align:center; font-size:60px">You are not allowed</h2>
        </header>
        <a href="/home" class="button"><i class="fa fa-arrow-left"> Back</i></a>
    </div>
    @endif
</section>


<style>
    .division{
        text-align: center;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 70px; 
        margin-top: 90px; 
        border-style: solid; 
        color: #13136b; 
        border-width: 5px; 
        border-radius: 15px; 
        font-family:'Didact Gothic', sans-serif;
    }
</style>
@endsection