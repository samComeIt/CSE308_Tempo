

@extends('layouts.app')
@section('content')
<section id="main" class="wrapper">
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
                        <a href="/approval" class="button primary"
                        style="background-color: white; text-align: center; color: #13136b; font-size: 30px">Open</a>
                    </li>
                </ul>
                <li>Study Rooms</li>
            </div>
        </div>
    </div>
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