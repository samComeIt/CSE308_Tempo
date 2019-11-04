@extends('layouts.app')

@section('content')
<section class="wrapper">
    <div class="inner">
        <header class="special">

            <h1>Create Facility</h1>
        </header>
    </div>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="inner">
                <form method="POST" action="/approval">
                    @csrf

                    <div class="form-input">
                        <label>Name</label> <input type="text" name="Name">
                    </div>

                    <div class="form-input">
                        <label>Location</label>
                        <input type="radio" name="Location" value="DormA"><label>Dorm A</label>
                        <input type="radio" name="Location" value="DormB"><label>Dorm B</label>
                    </div>

                    <div class="form-input">
                        <label>Category</label>
                        <input type="radio" name="Category" value="Study Room"><label>Study Room</label>
                        <input type="radio" name="Category" value="Music Room"><label>Music Room</label>
                        <input type="radio" name="Category" value="Movie Room"><label>Movie Room</label>
                    </div>

                    <div class="form-input">
                        <label>Type</label>
                        <input type="radio" name="Type" value="Approval"><label>Approval</label>
                        <input type="radio" name="Type" value="Open"><label>Open</label>
                    </div>

                    <div class="form-input">
                        <label>Capacity</label> <input type="number" name="Capacity">
                    </div>

                    <div class="form-group">
                        <label>Picture</label> <input type="file" name="Picture">
                    </div>

                    <div class="form-input">
                    <label>Status</label>
                        <input type="radio" name="Status" value="Open"><label>Open</label>
                        <input type="radio" name="Status" value="Closed"><label>Closed</label>
                        <input type="radio" name="Status" value="Out of Order"><label>Out of Order</label>
                    </div>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </body>
    </html>
@endsection
