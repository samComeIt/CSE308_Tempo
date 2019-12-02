@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">
<section class="wrapper">
    <div class="inner">
        <a href="/approval" class="button"><i class="fa fa-arrow-left"> Back</i></a>
        <header class="special">

            <h1 style="font-family:'Bitter', serif; text-align:center; font-size:60px">Show Facility</h1>
        </header>
    </div>
    <div class="inner">
        <div class="content">
            <table>
                <thead>
                <td style="font-weight: bold">Room Name</td>
                <td style="font-weight: bold">Room Number</td>
                <td style="font-weight: bold">Building</td>
                <td style="font-weight: bold">Type</td>
                <td style="font-weight: bold">Capacity</td>
                <td style="font-weight: bold">Status</td>
                </thead>
                <tbody>

                @foreach ($facilities as $facility)
                <form action="{{ route('approval.destroy',$facility->Facility_ID) }}" method="POST">
                    <tr>
                        <td>{{ $facility->Name }}</td>
                        <td class="inner-table">{{ $facility->Location }}</td>
                        <td class="inner-table">{{ $facility->Category }}</td>
                        <td class="inner-table">{{ $facility->Type }}</td>
                        <td class="inner-table">{{ $facility->Capacity }}</td>
                        <td class="inner-table">{{ $facility->Status }}</td>
                        @csrf
                    </tr>
                    @endforeach

                </form>
                </tbody>
            </table>
            <img style="display: block; margin-left: auto; margin-right: auto" src="{{url('image/'.$facility->filename)}}" alt="{{$facility->filename}}" height=20% width=40%>
        </div>
        <br>

        <div class="content">
            <div class="form-popup" id="myForm">
                <table class="hoverTable" id="tabela">
                    <h1 style="font-family:'Bitter', serif; text-align:center; font-size:50px">Timetable</h1>

                    <thead style="text-align: center; color:#13136b; font-weight:bold; font-size:20px">
                    <tr style="background-color: #97c1e8">
                        <td></td>
                        <td>
                            @php
                            $timezone = new DateTimeZone('Asia/Seoul');
                            $today = new DateTime('now', $timezone);
                            $todaystr1 = $today->format('m/d');
                            echo $todaystr1;
                            @endphp
                        </td>
                        <td>
                            @php
                            $today->modify('+1 day');
                            $todaystr2 = $today->format('m/d');
                            echo $todaystr2;
                            @endphp
                        </td>
                        <td>
                            @php
                            $today->modify('+1 day');
                            $todaystr3 = $today->format('m/d');
                            echo $todaystr3;
                            @endphp
                        </td>
                        <td>
                            @php
                            $today->modify('+1 day');
                            $todaystr4 = $today->format('m/d');
                            echo $todaystr4;
                            @endphp
                        </td>
                        <td>
                            @php
                            $today->modify('+1 day');
                            $todaystr5 = $today->format('m/d');
                            echo $todaystr5;
                            @endphp
                        </td>
                        <td>
                            @php
                            $today->modify('+1 day');
                            $todaystr6 = $today->format('m/d');
                            echo $todaystr6;
                            @endphp
                        </td>
                        <td>
                            @php
                            $today->modify('+1 day');
                            $todaystr7 = $today->format('m/d');
                            echo $todaystr7;
                            @endphp
                        </td>
                    </tr>
                    </thead>
                    <tbody style="text-align: center">
                    <tr id="row1" name="row1">
                        <td style="background-color: #97c1e8; color:#13136b; font-weight:bold; font-size:18px">8am</td>
                        <?php
                        for($i=1; $i<=7; $i++) {
                            $temp = $row1["$i"];
                            echo '<td class=" '. $temp. ' " ></td>';
                        }
                        ?>
                    </tr>
                    <tr id="row2" name="row2">
                        <td style="background-color: #97c1e8; color:#13136b; font-weight:bold; font-size:18px">9am</td>
                        <?php
                        for($i=1; $i<=7; $i++) {
                            $temp = $row2["$i"];
                            echo '<td class=" '. $temp. ' " ></td>';
                        }
                        ?>
                    </tr>
                    <tr id="row3" name="row3">
                        <td style="background-color: #97c1e8; color:#13136b; font-weight:bold; font-size:18px">10am</td>
                        <?php
                        for($i=1; $i<=7; $i++) {
                            $temp = $row3["$i"];
                            echo '<td class=" '. $temp. ' " ></td>';
                        }
                        ?>
                    </tr>
                    <tr id="row4" name="row4">
                        <td style="background-color: #97c1e8; color:#13136b; font-weight:bold; font-size:18px">11am</td>
                        <?php
                        for($i=1; $i<=7; $i++) {
                            $temp = $row4["$i"];
                            echo '<td class=" '. $temp. ' " ></td>';
                        }
                        ?>
                    </tr>
                    <tr id="row5" name="row5">
                        <td style="background-color: #97c1e8; color:#13136b; font-weight:bold; font-size:18px">12pm</td>
                        <?php
                        for($i=1; $i<=7; $i++) {
                            $temp = $row5["$i"];
                            echo '<td class=" '. $temp. ' " ></td>';
                        }
                        ?>
                    </tr>
                    <tr id="row6" name="row6">
                        <td style="background-color: #97c1e8; color:#13136b; font-weight:bold; font-size:18px">1pm</td>
                        <?php
                        for($i=1; $i<=7; $i++) {
                            $temp = $row6["$i"];
                            echo '<td class=" '. $temp. ' " ></td>';
                        }
                        ?>
                    </tr>
                    <tr id="row7" name="row7">
                        <td style="background-color: #97c1e8; color:#13136b; font-weight:bold; font-size:18px">2pm</td>
                        <?php
                        for($i=1; $i<=7; $i++) {
                            $temp = $row7["$i"];
                            echo '<td class=" '. $temp. ' " ></td>';
                        }
                        ?>
                    </tr>
                    <tr id="row8" name="row8">
                        <td style="background-color: #97c1e8; color:#13136b; font-weight:bold; font-size:18px">3pm</td>
                        <?php
                        for($i=1; $i<=7; $i++) {
                            $temp = $row8["$i"];
                            echo '<td class=" '. $temp. ' " ></td>';
                        }
                        ?>
                    </tr>
                    <tr id="row9" name="row9">
                        <td style="background-color: #97c1e8; color:#13136b; font-weight:bold; font-size:18px">4pm</td>
                        <?php
                        for($i=1; $i<=7; $i++) {
                            $temp = $row9["$i"];
                            echo '<td class=" '. $temp. ' " ></td>';
                        }
                        ?>
                    </tr>
                    <tr id="row10" name="row10">
                        <td style="background-color: #97c1e8; color:#13136b; font-weight:bold; font-size:18px">5pm</td>
                        <?php
                        for($i=1; $i<=7; $i++) {
                            $temp = $row10["$i"];
                            echo '<td class=" '. $temp. ' " ></td>';
                        }
                        ?>
                    </tr>
                    <tr id="row11" name="row11">
                        <td style="background-color: #97c1e8; color:#13136b; font-weight:bold; font-size:18px">6pm</td>
                        <?php
                        for($i=1; $i<=7; $i++) {
                            $temp = $row11["$i"];
                            echo '<td class=" '. $temp. ' " ></td>';
                        }
                        ?>
                    </tr>
                    <tr id="row12" name="row12">
                        <td style="background-color: #97c1e8; color:#13136b; font-weight:bold; font-size:18px">7pm</td>
                        <?php
                        for($i=1; $i<=7; $i++) {
                            $temp = $row12["$i"];
                            echo '<td class=" '. $temp. ' " ></td>';
                        }
                        ?>
                    </tr>
                    <tr id="row13" name="row13">
                        <td style="background-color: #97c1e8; color:#13136b; font-weight:bold; font-size:18px">8pm</td>
                        <?php
                        for($i=1; $i<=7; $i++) {
                            $temp = $row13["$i"];
                            echo '<td class=" '. $temp. ' " ></td>';
                        }
                        ?>
                    </tr>
                    <tr id="row14" name="row14">
                        <td style="background-color: #97c1e8; color:#13136b; font-weight:bold; font-size:18px">9pm</td>
                        <?php
                        for($i=1; $i<=7; $i++) {
                            $temp = $row14["$i"];
                            echo '<td class=" '. $temp. ' " ></td>';
                        }
                        ?>
                    </tr>
                    <tr id="row15" name="row15">
                        <td style="background-color: #97c1e8; color:#13136b; font-weight:bold; font-size:18px">10pm</td>
                        <?php
                        for($i=1; $i<=7; $i++) {
                            $temp = $row15["$i"];
                            echo '<td class=" '. $temp. ' " ></td>';
                        }
                        ?>
                    </tr>
                    <tr id="row16" name="row16">
                        <td style="background-color: #97c1e8; color:#13136b; font-weight:bold; font-size:18px">11pm</td>
                        <?php
                        for($i=1; $i<=7; $i++) {
                            $temp = $row16["$i"];
                            echo '<td class=" '. $temp. ' " ></td>';
                        }
                        ?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <style style="text/css">
        .hoverTable {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
        }

        .hoverTable tr, th {
            position: relative;
        }

        .hoverTable td {
            /*            padding: 7px;*/
            border: #13136b 2px solid;
            /*            background-color: #f0f0f0;*/
        }

        /* Define the default color for all the table rows */
        .hoverTable tr {
            background-color: #ececec;
        }

        /* Define the hover highlight color for the table row */
        .hoverTable td:hover {
            background-color: #4b93d6;
        }

        .hoverTable tr:hover {
            background-color: #c8ddf7;
        }

        .hoverTable tr, th {
            position: relative;
        }

        .fill {
            background-color: #4b93d6;
        }
    </style>

    <script>
        var startDate;
        var startTime;
        var duration;
        for(i=1;i<tabela.rows.length;i++){
            for(j=1;j<tabela.rows[i].cells.length;j++){
                tabela.rows[i].cells[j].onclick=function(i,j){
                    startDate= tabela.rows[0].cells[j].innerText
                    startTime= tabela.rows[i].cells[0].innerText

                    document.getElementById("startDate").value = startDate
                    document.getElementById("startTime").value = startTime
                    $('#myModal').modal('show');

                    $('.modal-child').on('show.bs.modal', function () {
                        var modalParent = $(this).attr('data-modal-parent');
                        $(modalParent).css('opacity', 0);
                    });

                    $('.modal-child').on('hidden.bs.modal', function () {
                        var modalParent = $(this).attr('data-modal-parent');
                        $(modalParent).css('opacity', 0);
                    });
                }.bind(null,i,j)
            }
        }

    </script>
</section>

<!-- Modal -->
<form action="/approval/timeslot" method="POST" style="width: 80%">
    @csrf

    <div class="modal fade" style="float: left; left: 50%; top: 50%; transform: translate(-50%, -50%); overflow: hidden"
         id="myModal"
         tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-dialog-centered" role="document" style="width: 600px; height: 90%">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="myModalLabel">Select Time</h2>
                </div>
                <div class="modal-body">

                    Start Date: <input type="textarea" name="date" id="startDate" readonly>
                    @foreach ($facilities as $facility)
                    <input type="hidden" name="facility_id" value='{{$facility->Facility_ID}}'>
                    <label for="startDate"></label>
                    Start Time: <input type="textarea" name="start_time" id="startTime" readonly>
                    <label for="startTime"></label>
                    <input type="hidden" name="duration" value="1">

                    <input type="hidden" name="type" value='{{$facility->Type}}'>
                    <input type="hidden" name="user_id" value='{{ Auth::user()->id}}'>

                    @endforeach


                    <label id="duration"></label>
                </div>
                <div class="modal-footer">
                    <button type="submit" style="height: 2rem; padding: 0 1rem; line-height: 0rem">Confirm</button>


                    <button type="button" data-dismiss="modal" style="height: 2rem; padding: 0 1rem; line-height: 0rem">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<!--

<form action="/approval/reservation" method="POST" style="width: 80%">
    @csrf
    <div id="submit" class="modal modal-child"
         style="float: left; left: 50%; top: 50%; transform: translate(-50%, -50%)" data-backdrop-limit="1"
         tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-modal-parent="#myModal">
        <div class="modal-dialog">
            Modal content
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Reservation Form</h2>
                </div>
                <div class="modal-body">
                    <label>Name:</label>
                    <input type="text" name="name" id="name" required>
                    <label>Number of Students:</label>
                    <input type="text" name="number" id="number" required>
                    <label>Purpose:</label>
                    <input type="text" name="purpose" id="purpose" required>



                </div>
                <div class="modal-footer">
                    <button type="submit" style="height: 2rem; padding: 0 1rem; line-height: 0rem">Submit</button>
                    <button class="btn btn-default" data-dismiss="modal" data-dismiss="modal" aria-hidden="true"
                            style="height: 2rem; padding: 0 1rem; line-height: 0rem">Cancel
                    </button>
                </div>

            </div>
        </div>
    </div>
</form>
-->
@endsection
