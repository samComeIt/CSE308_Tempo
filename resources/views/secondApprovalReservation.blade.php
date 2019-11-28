@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">
<section class="wrapper">
    <div class="inner">
        <header class="special">

            <h1 style="font-family:'Bitter', serif; text-align:center; font-size:60px">Second Reservation</h1>
        </header>
    </div>


    <div class="inner" style="display:flex; justify-content:center; align-items:center">
        <form action="/approval/reservation/" method="POST" style="width: 60%">
            @csrf
            <input type="hidden" name="timeslot_id" value='{{ $timeslot_id }}' readonly>
            <input type="hidden" name="type" value="Approval" readonly>
            <input type="hidden" name="user_id" value='{{ Auth::user()->id }}' readonly>
            <input type="hidden" name="facility_id" value='{{ $timeslot_facillity_id }}' readonly>
            <input type="hidden" name="reservation_status" value="Pending" readonly>
            <div class="form-input" style="margin-bottom: 10px;">
                <label>Purpose</label> <input type="text" name="purpose">
            </div>
            <div class="form-input" style="margin-bottom: 10px;">
                <label>Capacity</label> <input type="text" name="number">
            </div>
                <button type="submit">Complete</button>
            </form>
        </div>
</section>

@endsection
