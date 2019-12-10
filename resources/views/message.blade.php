@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">

<section class="wrapper">
    <section>

        <article>
            <h2 style="font-family:'Bitter', serif; text-align:center; margin-bottom: 50px; font-size:60px">Message Page</h2>
            <div class="inner">
                <table>
                    <thead>
                    <td style="font-weight: bold">Date</td>
                    <td style="font-weight: bold">Start Time</td>
                    <td style="font-weight: bold">Duration</td>
                    <td style="font-weight: bold">Reservation Status</td>
                    <td style="font-weight: bold">Update Reservation</td>
                    </thead>
                    <tbody>
                    @foreach ($allReservations as $res)
                    @foreach ($allTimeslots as $tim)
                    @if ($res->user_id == Auth::user()->id && $res->timeslot_id == $tim->timeslot_id &&
                    $tim->date >= date('m/d') && $res->reservation_status != "Cancel")
                    <tr style="background-color: white; height:60px">
                        <td style="vertical-align: middle">{{ $tim->date }}</td>
                        <td style="vertical-align: middle">{{ $tim->start_time}}</td>
                        <td style="vertical-align: middle">{{ $tim->duration }}</td>
                        <td style="vertical-align: middle">{{ $res->reservation_status }}</td>
                        <td><a href="{{ route('cancel.show',$tim->timeslot_id) }}" class="button">Cancel</a>
                        <a href="{{ route('message.approve',$tim->timeslot_id) }}" class="button">Accpet</a></td>
                    </tr>
                    @endif
                    @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>
        </article>
    </section>
</section>

