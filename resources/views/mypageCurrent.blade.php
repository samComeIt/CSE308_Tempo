@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">

<section class="wrapper">
    <section>
        <nav style="float:left; width:20%; font-size:20px; margin-right:60px; font-weight:bold; border-right: 3px solid #13136b; height: 70%">
            <ul style="padding: 20px"><a href="/mypage/current">Current Reservation</a></ul>
            <ul style="padding: 20px"><a href="/mypage/past">Past Reservation</a></ul>
            <ul style="padding: 20px"><a href="/mypage/cancel">Cancelled Reservation</a></ul>
            <ul style="padding: 20px"><a href="/mypage/penalty">Penalty</a></ul>
        </nav>

        <article>
            <h2 style="font-family:'Bitter', serif; text-align:left; font-size:60px; margin-bottom: 50px">Current Reservation</h2>
            <div class="inner" style="float:left; width:70%;">
                <table>
                    <thead>
                    <td style="font-weight: bold">Facility Name</td>
                    <td style="font-weight: bold">Date</td>
                    <td style="font-weight: bold">Start Time</td>
                    <td style="font-weight: bold">Duration</td>
                    <td style="font-weight: bold">Reservation Status</td>
                    @if(Auth::user()->role =="staff")
                    <td style="font-weight: bold">Name</td>
                    <td style="font-weight: bold">Email</td>
                    @endif
                    </thead>
                    <tbody>
                    @foreach ($allReservations as $res)
                    @foreach ($allTimeslots as $tim)
                    @foreach ($allStuFac as $stuFac)
                    @foreach ($allUsers as $user)
                    @if (Auth::user()->role =="student" && $res->user_id == Auth::user()->id && $res->timeslot_id == $tim->timeslot_id &&
                    $tim->date >= date('m/d') && $stuFac->Facility_ID ==$res->facility_id && $res->reservation_status !="Cancel")
                    <tr style="background-color: white; height:60px">
                        <td style="vertical-align: middle">{{ $stuFac->Name }}</td>
                        <td style="vertical-align: middle">{{ $tim->date }}</td>
                        <td style="vertical-align: middle">{{ $tim->start_time}}</td>
                        <td style="vertical-align: middle">{{ $tim->duration }}</td>
                        <td style="vertical-align: middle">{{ $res->reservation_status }}</td>
                        <td><a href="{{ route('mypage.cancel',$tim->timeslot_id) }}" class="button">Cancel Reservation</a></td>
                    </tr>

                    @elseif (Auth::user()->role =="staff" && $res->timeslot_id == $tim->timeslot_id &&
                    $tim->date >= date('m/d') && $stuFac->Facility_ID ==$res->facility_id && $res->reservation_status !="Cancel"
                    && $res->user_id == $user->id)
                    <tr style="background-color: white; height:60px">
                        <td style="vertical-align: middle">{{ $stuFac->Name }}</td>
                        <td style="vertical-align: middle">{{ $tim->date }}</td>
                        <td style="vertical-align: middle">{{ $tim->start_time}}</td>
                        <td style="vertical-align: middle">{{ $tim->duration }}</td>
                        <td style="vertical-align: middle">{{ $res->reservation_status }}</td>
                        <td style="vertical-align: middle">{{ $user->name }}</td>
                        <td style="vertical-align: middle">{{ $user->email }}</td>

                        <td><a href="{{ route('mypage.cancel',$tim->timeslot_id) }}" class="button">Cancel Reservation</a></td>
                    </tr>
                    @endif
                    @endforeach
                    @endforeach
                    @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>
        </article>
    </section>
</section>
