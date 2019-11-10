@extends('layouts.app')

@section('content')
<section class="wrapper">
    <div class="inner">
        <header class="special">

            <h1 style="font-size:60px">Create Facility</h1>
        </header>
    </div>

    <body>
            <div class="inner" style="display:flex; justify-content:center; align-items:center">
                <form action="/approval" method="POST" style="width: 60%">
                    @csrf

                    <div class="form-input" style="margin-bottom: 10px;">
                        <label>Name</label> <input type="text" name="Name">
                    </div>

                    <div class="form-input" style="margin-bottom: 10px">
                        <label>Location</label>
                        <input type="radio" onclick="uncheck()" id="DormA" name="Location" value="DormA">
                        <label for="DormA">Dorm A</label>
                        <input type="radio" onclick="uncheck()" id="DormB" name="Location" value="DormB">
                        <label for="DormB">Dorm B</label>
                        <div class="details" style="display:none"><label>Other:</label><input type="text" name="Location"></div>
                        <a id="more" href="#" onclick="check()">Others</a>
                        <script>
                            function check() {
                            $('.details').slideToggle(function(){$('#more').html($('.details').is(':visible')?'':'Others');});

                                document.getElementById("DormA").checked = false;
                                document.getElementById("DormB").checked = false;
                            }
                            function uncheck() {
                                document.getElementById("more").checked = false;
                                $('.details').slideToggle(function(){$('#more').html($('.details').is(':visible')?'':'Others');});

                            }
                            </script>

                      
                    </div>


                    <div class="form-input" style="margin-bottom: 10px">

                        <label>Category</label>
                        <input type="radio" id="StudyRoom" name="Category" value="Study Room">
                        <label for="StudyRoom">Study Room</label>
                        <input type="radio" id="MusicRoom" name="Category" value="Music Room">
                        <label for="MusicRoom">Music Room</label>
                        <input type="radio" id="MovieRoom" name="Category" value="Movie Room">
                        <label for="MovieRoom">Movie Room</label>
                    </div>

                    <div class="form-input" style="margin-bottom: 10px">
                        <label>Type</label>
                        <input type="radio" id="Approval" name="Type" value="Approval">
                        <label for="Approval">Approval</label>
                        <input type="radio" id="Open" name="Type" value="Open">
                        <label for="Open">Open</label>
                    </div>

                    <div class="form-input" style="margin-bottom: 10px">
                        <label>Status</label>
                        <input type="radio" id="Open1" name="Status" value="Open">
                        <label for="Open1">Open</label>
                        <input type="radio" id="Closed" name="Status" value="Closed">
                        <label for="Closed">Closed</label>
                        <input type="radio" id="OutOfOrder" name="Status" value="Out Of Order">
                        <label for="OutOfOrder">Out of Order</label>
                    </div>


                    <div class="form-input" style="margin-bottom: 10px">
                        <label>Capacity</label> <input type="number" name="Capacity">
                    </div>

                    <div class="form-group" style="margin-bottom: 10px">
                        <label>Picture</label> <input type="file" name="Picture">
                    </div>

                    <button type="submit">Submit</button>
                </form>
        </div>
    </body>
</section>
    @endsection
