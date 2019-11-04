@extends('layouts.app')

@section('content')
<section class="wrapper">
    <div class="inner">
        <header class="special">

            <h1>Create Facility</h1>
        </header>
    </div>

    <body>
            <div class="inner">
                <form action="/approval" method="POST" >
                    @csrf

                    <div class="form-input">
                        <label>Name</label> <input type="text" name="Name">
                    </div>

                    <div class="form-input">
                        <label>Location</label>
                        <input type="radio" id="DormA" name="Location" value="DormA">
                        <label for="DormA">Dorm A</label>
                        <input type="radio" id="DormB" name="Location" value="DormB">
                        <label for="DormB">Dorm B</label>
                    </div>

                    <div class="form-input">
                        <label>Category</label>
                        <input type="radio" id="StudyRoom" name="Category" value="StudyRoom">
                        <label for="StudyRoom">Study Room</label>
                        <input type="radio" id="MusicRoom" name="Category" value="MusicRoom">
                        <label for="MusicRoom">Music Room</label>
                        <input type="radio" id="MovieRoom" name="Category" value="MovieRoom">
                        <label for="MovieRoom">Movie Room</label>
                    </div>

                    <div class="form-input">
                        <label>Type</label>
                        <input type="radio" id="Approval" name="Type" value="Approval">
                        <label for="Approval">Approval</label>
                        <input type="radio" id="Open" name="Type" value="Open">
                        <label for="Open">Open</label>
                    </div>

                    <div class="form-input">
                        <label>Status</label>
                        <input type="radio" id="Open" name="Status" value="Open">
                        <label for="Open">Open</label>
                        <input type="radio" id="Closed" name="Status" value="Closed">
                        <label for="Closed">Closed</label>
                        <input type="radio" id="OutOfOrder" name="Status" value="OutOfOrder">
                        <label for="OutOfOrder">Out of Order</label>
                    </div>


                    <div class="form-input">
                        <label>Capacity</label> <input type="number" name="Capacity">
                    </div>

                    <div class="form-group">
                        <label>Picture</label> <input type="file" name="Picture">
                    </div>

                    <button type="submit">Submit</button>
                </form>
        </div>
    </body>
</section>
    @endsection