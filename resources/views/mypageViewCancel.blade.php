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

            <h2 style="font-family:'Bitter', serif; text-align:left; font-size:60px; margin-bottom: 50px">Cancelled Reservations</h2>
            <div class="inner" style="float:left; width:70%;">
                <table>
                    <tbody>
                    <thead>
                    <td style="font-weight: bold">Facility Name</td>
                    @if(Auth::user()->role=="staff")
                    <td style="font-weight: bold">Name</td>
                    <td style="font-weight: bold">Email</td>
                    @endif
                    <td style="font-weight: bold">Date</td>
                    <td style="font-weight: bold">Start Time</td>
                    <td style="font-weight: bold">Duration</td>
                    <td style="font-weight: bold">Number</td>
                    <td style="font-weight: bold">Cancel Time</td>
                    </thead>

                    @foreach ($allUsers as $can)
                    @foreach ($allFacilities as $fac)
                    @foreach ($allCanUsers as $canusers)
                    @if(Auth::user()->role == "student" && Auth::user()->id==$can->user_id && $fac->Facility_ID == $can->facility_id)
                    <tr style="background-color: white; height:60px">
                        <td style="vertical-align: middle">{{ $fac->Name }}</td>
                        <td style="vertical-align: middle">{{ $can->date }}</td>
                        <td style="vertical-align: middle">{{ $can->start_time}}</td>
                        <td style="vertical-align: middle">{{ $can->duration }}</td>
                        <td style="vertical-align: middle">{{ $can->number }}</td>
                        <td style="vertical-align: middle">{{ $can->created_at }}</td>

                    </tr>
                    @elseif(Auth::user()->role == "staff" && $fac->Facility_ID == $can->facility_id && $can->user_id && $canusers->id==$can->user_id)

                    <tr style="background-color: white; height:60px">
                        <td style="vertical-align: middle">{{ $fac->Name }}</td>
                        <td style="vertical-align: middle">{{ $canusers->name }}</td>
                        <td style="vertical-align: middle">{{ $canusers->email }}</td>
                        <td style="vertical-align: middle">{{ $can->date }}</td>
                        <td style="vertical-align: middle">{{ $can->start_time}}</td>
                        <td style="vertical-align: middle">{{ $can->duration }}</td>
                        <td style="vertical-align: middle">{{ $can->number }}</td>
                        <td style="vertical-align: middle">{{ $can->created_at }}</td>

                    </tr>
                    @endif
                    @endforeach
                    @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>

        </article>
    </section>
</section>
