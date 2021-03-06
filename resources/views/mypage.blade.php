@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">

<section class="wrapper">
    <section>
        <nav style="float:left; width:20%; font-size:20px; margin-right:60px; font-weight:bold; border-right: 3px solid #13136b; height: 70%">
            <ul style="padding: 20px"><a href="/mypage/current">Current Reservation</a></ul>
            <ul style="padding: 20px"><a href="/mypage/past">Past Reservation</a></ul>
            <ul style="padding: 20px"><a href="/mypage/cancel">View Cancel</a></ul>
            <ul style="padding: 20px"><a href="/mypage/penalty">Penalty</a></ul>
        </nav>

        <article>
            <h2 style="font-family:'Bitter', serif; text-align:left; font-size:60px">My Page</h2>
            <div class="inner" style="float:left; width:70%;">
                <table>
                        <thead>
                        <td style="font-weight: bold">Facility ID</td>
                        <td style="font-weight: bold">Facility Name</td>
                            <td style="font-weight: bold">Date</td>
                            <td style="font-weight: bold">Location</td>
                            <td style="font-weight: bold">Purpose</td>
                        </thead>
                        <tbody>
                            @foreach ($allReservations as $res)
                            @if ($res->user_id == Auth::user()->id)
                            <tr style="background-color: white; height:60px">
                                <td style="vertical-align: middle">{{ $res->user_id }}</td>
                                <td style="vertical-align: middle">{{ $res->Location }}</td>
                                <td style="vertical-align: middle">{{ $res->purpose }}</td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                </table>
            </div>
        </article>
    </section>
</section>
