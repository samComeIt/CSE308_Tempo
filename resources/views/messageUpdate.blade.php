@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">

<section class="wrapper">
    <section>
        <nav style="float:left; width:20%; font-size:20px; margin-right:60px; font-weight:bold; border-right: 3px solid #13136b; height: 70%">
        </nav>

        <article>
            <h2 style="font-family:'Bitter', serif; text-align:left; font-size:60px">Reservation Update Page</h2>
            <div class="inner" style="float:left; width:70%;">
                <table>
                    <thead>
                    <td style="font-weight: bold">Date</td>
                    <td style="font-weight: bold">Start Time</td>
                    <td style="font-weight: bold">Duration</td>
                    <td style="font-weight: bold">Reservation Status</td>
                    </thead>
                    <tbody>
                    @foreach ($oneUpdateReservation as $updateRes)
                    @foreach ($oneTimeRes as $updateTime)
                    <form action="{{ route('timeslot.update',$updateRes->timeslot_id) }}" method="POST" style="width: 60%">
                        @csrf
                        @method('PUT')

                        <td style="background-color: white; height:60px">
                        <td style="vertical-align: middle">{{ $updateTime->date }}</td>
                        <td style="vertical-align: middle">{{ $updateTime->start_time}}</td>
                        <td style="vertical-align: middle">{{ $updateTime->duration }}</td>
                        <td style="vertical-align: middle">{{ $updateRes->reservation_status }}</td>
                        <td><input type="radio" id ="Pending" name="reservation_status" value="Pending" {{ $updateRes->reservation_status == 'Pending' ? 'checked' : ''}}>
                            <label for="Pending">Pending</label>
                            <input type="radio" id ="Accept" name="reservation_status" value="Accept" {{ $updateRes->reservation_status == 'Accept' ? 'checked' : ''}}>
                            <label for="Accept">Accept</label></td>
                        </td>
                        <button type="submit">Update</button>


                        @endforeach
                        @endforeach
                    </form>
                    </tbody>
                </table>
            </div>
        </article>
    </section>
</section>

