@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">
<section class="wrapper">
    <div class="inner" style="width: 60%">
        <a href="/approval" class="button"><i class="fa fa-arrow-left"> Back</i></a>
        <header class="special">

            <h1 style="font-family:'Bitter', serif; text-align:center; font-size:60px">Edit Facility</h1>
        </header>
    </div>


    <div class="inner" style="display:flex; justify-content:center; align-items:center">
        @foreach ($facilities as $facility)
        <form action="{{ route('approval.update',$facility->Facility_ID) }}" method="POST" style="width: 60%">
            @csrf
            @method('PUT')
            <div class="form-input" style="margin-bottom: 10px">
                <label>Room Name</label> <input type="text" name="Name" value="{{ $facility->Name }}" required>
            </div>

            <div class="form-input" style="margin-bottom: 10px">
                <label>Room Number</label>
                <input type="text" name="Location" value="{{ $facility->Location }}" required>
            </div>

            <div class="form-input" style="margin-bottom: 10px">
                <label>Building</label>
                @foreach ($categories as $category)
                <input type="radio" id="{{ $category->Category }}" name="Category" value="{{ $category->Category }}" required>
                <label for="{{ $category->Category }}">{{ $category->Category }}</label>
                @endforeach
                <input type="radio" id="categoryOther" name="Category" value="">
                
                <label for="categoryOther">Other (Type in the new building below)</label>
                <textarea name="Category" rows="1" disabled id="otherField" required></textarea>
            </div>

<!--
            <div class="form-input" style="margin-bottom: 10px">
                <label>Type</label>
                <input type="hidden" id="Approval" name="Type" value="Approval" required checked readonly
                       {{$facility->Type == 'Approval' ? 'checked' : ''}}>
                <label for="Approval">Approval</label>
            </div>
-->

            <div class="form-input" style="margin-bottom: 10px">
                <label>Status</label>
                <input type="radio" id="Available" name="Status" value="Available" required
                       {{$facility->Status == 'Available' ? 'checked' : ''}}>
                <label for="Available">Available</label>
                <input type="radio" id="OutOfOrder" name="Status" value="OutOfOrder"
                       {{$facility->Status == 'OutOfOrder' ? 'checked' : ''}}>
                <label for="OutOfOrder">Out of Order</label>
            </div>

            <div class="form-input" style="margin-bottom: 10px">
                <label>Capacity</label> <input type="number" name="Capacity" min="1" max="1000" required value={{ $facility->Capacity }}>
            </div>
            
            <div class="form-input" style="margin-bottom: 10px">
                <label>Description</label>
                <textarea maxlength="300" name="Description" style="rows:7; cols: 40; height: 150px" value={{ $facility->Description }}></textarea>
            </div>

<!--
            <div class="form-group" style="margin-bottom: 10px">
                <label>Picture</label> <input type="file" name="Picture" value={{ $facility->Picture }}>
            </div>
-->

            <a class="button" href="{{ route('approval.index')}}" style="margin-top:10px">Cancel</a>

            <button type="submit" style="margin-top:10px">Update</button>


            @endforeach
        </form>
    </div>
</section>

<script>
    var categoryOther = document.querySelectorAll('input[name="Category"]');
    var otherField = document.getElementById('otherField');
    var tempCategory = "";

    for(var i = 0; i < categoryOther.length; i++) {
        categoryOther[i].addEventListener("change", categoryHandler);
    }


    function categoryHandler() {
        if(this.id == "categoryOther") {
        otherField.disabled = false;
        otherField.value = tempCategory;
      } else {
        tempCategory = otherField.value;
        otherField.value = "";
        otherField.disabled = true;
      }
}
</script>
@endsection
