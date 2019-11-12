@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">
<section class="wrapper">
    <div class="inner">
        <header class="special">

            <h1 style="font-family:'Bitter', serif; text-align:center; font-size:60px">Create Facility</h1>
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
                <input type="text" name="Location">
                <!--
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
                -->


            </div>


            <div class="form-input" style="margin-bottom: 10px">

                <label>Category</label>
                <input type="radio" id="DormA" name="Category" value="DormA">
                <label for="DormA">Dorm A</label>
                <input type="radio" id="DormB" name="Category" value="DormB">
                <label for="DormB">Dorm B</label>
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
                <input type="radio" id="Available" name="Status" value="Available">
                <label for="Available">Available</label>
                <input type="radio" id="OutofOrder" name="Status" value="OutofOrder">
                <label for="OutofOrder">Out of Order</label>
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
