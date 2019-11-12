@extends('layouts.app')

@section('content')
<section class="wrapper">
    <div class="inner">
        <header class="special">

            <h1>Edit Facility</h1>
        </header>
    </div>


    <div class="inner">
        @foreach ($facilities as $facility)
        <form action="{{ route('facility.update',$facility->Facility_ID) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-input">
                <label>Name</label> <input type="text" name="Name" value={{ $facility->Name }}>
            </div>

            <div class="form-input">
                <label>Location</label>
                <input type="radio" id="DormA" name="Location" value="DormA"
                       {{$facility->Location == 'DormA' ? 'checked' : ''}}>
                <label for="DormA">Dorm A</label>
                <input type="radio" id="DormB" name="Location" value="DormB"
                       {{$facility->Location == 'DormB' ? 'checked' : ''}}>
                <label for="DormB">Dorm B</label>
            </div>

            <div class="form-input">
                <label>Category</label>
                <input type="radio" id="StudyRoom" name="Category" value="StudyRoom"
                       {{$facility->Category == 'StudyRoom' ? 'checked' : ''}}>
                <label for="StudyRoom">Study Room</label>
                <input type="radio" id="MusicRoom" name="Category" value="MusicRoom"
                       {{$facility->Category == 'MusicRoom' ? 'checked' : ''}}>
                <label for="MusicRoom">Music Room</label>
                <input type="radio" id="MovieRoom" name="Category" value="MovieRoom"
                       {{$facility->Category == 'MovieRoom' ? 'checked' : ''}}>
                <label for="MovieRoom">Movie Room</label>
            </div>

            <div class="form-input">
                <label>Type</label>
                <input type="radio" id="Approval" name="Type" value="Approval"
                       {{$facility->Type == 'Approval' ? 'checked' : ''}}>
                <label for="Approval">Approval</label>
                <input type="radio" id="Open" name="Type" value="Open"
                       {{$facility->Type == 'Open' ? 'checked' : ''}}>
                <label for="Open">Open</label>
            </div>

            <div class="form-input">
                <label>Status</label>
                <input type="radio" id="Open" name="Status" value="Open"
                       {{$facility->Status == 'Open' ? 'checked' : ''}}>
                <label for="Open">Open</label>
                <input type="radio" id="Closed" name="Status" value="Closed"
                       {{$facility->Status == 'Closed' ? 'checked' : ''}}>
                <label for="Closed">Closed</label>
                <input type="radio" id="OutOfOrder" name="Status" value="OutOfOrder"
                       {{$facility->Status == 'OutOfOrder' ? 'checked' : ''}}>
                <label for="OutOfOrder">Out of Order</label>
            </div>

            <div class="form-input">
                <label>Capacity</label> <input type="number" name="Capacity" value={{ $facility->Capacity }}>
            </div>

            <div class="form-group">
                <label>Picture</label> <input type="file" name="Picture" value={{ $facility->Picture }}>
            </div>

            <a class="btn btn-primary" href="{{ route('facility.index')}}">Cancel</a>

            <button type="submit" class="btn btn-danger">Update</button>


            @endforeach
        </form>
    </div>
</section>
@endsection
