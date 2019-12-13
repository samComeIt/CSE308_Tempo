@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">

<section class="wrapper">
    <section>

        <article>
            <h2 style="font-family:'Bitter', serif; text-align:center; margin-bottom: 50px; font-size:60px">Details</h2>

            <div class="inner">
                <table>
                    <thead>
                    <td style="font-weight: bold">Facility ID</td>
                    <td style="font-weight: bold">Type</td>
                    <td style="font-weight: bold">User ID</td>
                    <td style="font-weight: bold">Reservation Status</td>
                    <td style="font-weight: bold">Number</td>
                    <td style="font-weight: bold">Purpose</td>
                    </thead>
                    <tbody>

                    @foreach($res as $res1)
                    <tr style="background-color: white; height:60px">
                        <td style="vertical-align: middle">{{ $res1->facility_id }}</td>
                        <td style="vertical-align: middle">{{ $res1->type }}</td>
                        <td style="vertical-align: middle">{{ $res1->user_id}}</td>
                        <td style="vertical-align: middle">{{ $res1->reservation_status }}</td>
                        <td style="vertical-align: middle">{{ $res1->number }}</td>
                        <td style="vertical-align: middle; white-space: normal">{{ $res1->purpose }}</td>
                        <td><a href="{{ route('cancel.show',$res1->timeslot_id) }}" class="button">Cancel</a>
                            <a href="{{ route('message.approve',$res1->timeslot_id) }}" class="button">Accept</a></td>

                    </tr>
                    @endforeach

                    </tbody>

                </table>
            </div>
        </article>
    </section>
</section>

