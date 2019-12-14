

@extends('layouts.app')
@section('content')
<section id="main" class="wrapper">
    @if($user["penalty_status"] != "3")
    <div class="inner">
        <div class="content">
            <h2 style="font-family:'Bitter', serif; text-align:center; font-size: 60px">TEMPO</h2>
            <h2 style="font-family:'Bitter', serif; text-align:center; font-size: 40px">Online Room Reservation</h2>
            @csrf
            <div>
                <ul class="actions" style="justify-content: center">
                    <li>
                        <a href="/approval" class="button" id="open" style="font-size:30px">Approval<br>
                            <p style="font-size:17px; margin-top:20px">Click this button to make a reservation for facilities that need an approval from the staff (Ex. Music Room, Movie Room)</p></a>
                    </li>
                </ul>
            </div>

            <div>
                <ul class="actions" style="justify-content: center">
                    <li>
                        <a href="/open" id="open" class="button" style="font-size:30px">Open <br>
                            <p style="font-size:17px; margin-top:20px">Click this button to make a reservation for facilities that do not need an approval from the staff (Ex. Study Room)</p>
                        </a>
                    </li>
                </ul>
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

    #open{
        height: auto;
        border: 4px solid #13136b;
        border-radius: 15px;
        font-family:'Didact Gothic', sans-serif;
        padding: 40px;
        justify-content: center;
        align-items: center;
        margin-top: 50px;
        cursor: pointer;
        width: 950px;
    }
</style>
@endsection
