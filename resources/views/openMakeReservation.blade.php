@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">
<section class="wrapper">
    <div class="inner">
        <header class="special">

            <h1 style="font-family:'Bitter', serif; text-align:center; font-size:60px">Make a Reservation</h1>
        </header>
    </div>

    <div class="inner" style="width: 50%">
        <form action="{{ route('timeslot.destroy', [$timeslot_id, $timeslot_facillity_id]) }}" method="POST">
                @csrf
                @method('DELETE')
            <button type="submit" formnovalidate><i class="fa fa-arrow-left"> Back to facility list</i></button>
        </form>
    </div>

    <div class="inner" style="display:flex; justify-content:center; align-items:center">
        <form action="/open/reservation/" method="POST" style="width: 60%">
            @csrf
            <input type="hidden" name="timeslot_id" value='{{ $timeslot_id }}' readonly>
            <input type="hidden" name="type" value="Open" readonly>
            <input type="hidden" name="user_id" value='{{ Auth::user()->id }}' readonly>
            <input type="hidden" name="facility_id" value='{{ $timeslot_facillity_id }}' readonly>
            <input type="hidden" name="reservation_status" value="Accept" readonly>
            <div class="form-input" style="margin-bottom: 30px;">
                <label style="font-size: 20px; margin-bottom: 10px">Purpose</label> <textarea name="purpose"  maxlength="500" style="rows:7; cols: 40; height: 150px" required></textarea>
            </div>
            <div class="form-input" style="margin-bottom: 30px;">
                <label style="font-size: 20px; margin-bottom: 10px">Number of People</label> <input type="number" name="number" min="1" max="{{ $facility_capacity }}" required>
            </div>
                <button type="submit">Complete</button>
        </form>

        </div>
</section>

@endsection
