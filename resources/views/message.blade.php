@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">

<section class="wrapper">
    <section>

        <article>
            <h2 style="font-family:'Bitter', serif; text-align:center; margin-bottom: 50px; font-size:60px">Request Box</h2>

            <div class="inner">
                <div class="details" style="display:none">
                    <td>Hello</td>
                </div>
              <!--  <a href="/mypage/cancel" class="button" style="margin-bottom:30px; float:right"> Show cancelled reservations</a>-->
                <table>
                    <thead>
                    <td style="font-weight: bold">Facility Name</td>
                    <td style="font-weight: bold">Date</td>
                    <td style="font-weight: bold">Start Time</td>
                    <td style="font-weight: bold">Duration</td>
                    <td style="font-weight: bold">Purpose</td>
                    <td style="font-weight: bold">Name</td>
                    <td style="font-weight: bold">Email</td>
                    <td style="font-weight: bold">Penalty Status</td>
                    <td style="font-weight: bold">Update Reservation</td>
                    </thead>
                    <tbody>


                    @foreach ($allReservations as $res)
                    @foreach ($allTimeslots as $tim)
                    @foreach ($allStuFac as $stuFac)
                    @foreach ($allUsers as $user)
                    @if ($user->role == "student" && $res->user_id == $user->id && $tim->date >= date('m/d') && $res->timeslot_id == $tim->timeslot_id &&
                     $res->reservation_status == "Pending" && $stuFac->Facility_ID ==$res->facility_id)
                    <tr style="background-color: white; height:60px">
                        <td style="vertical-align: middle">{{ $stuFac->Name }}</td>
                        <td style="vertical-align: middle">{{ $tim->date }}</td>
                        <td style="vertical-align: middle">{{ $tim->start_time}}</td>
                        <td style="vertical-align: middle">{{ $tim->duration }}</td>
                        <td style="vertical-align: middle">{{ $res->purpose }}</td>
                        <td style="vertical-align: middle">{{ $user->name }}</td>
                        <td style="vertical-align: middle">{{ $user->email }}</td>
                        <td style="vertical-align: middle">{{ $user->penalty_status }}</td>

                        <td><a href="{{ route('cancel.show',$tim->timeslot_id) }}" class="button">Cancel</a>
                        <a href="{{ route('message.approve',$tim->timeslot_id) }}" class="button">Accept</a></td>


                    </tr>

                    @endif
                    @endforeach
                    @endforeach
                    @endforeach
                    @endforeach
                    </tbody>
                </table>

            </div>

            </div>

        </article>

    </section>
</section>

