@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">
<section class="wrapper">
    <div class="inner">
        <header class="special">

            <h1 style="font-family:'Bitter', serif; text-align:center; font-size:60px">Create Facility</h1>
        </header>
    </div>
    <div class="inner" style="display:flex; justify-content:center; align-items:center">
        <form action="/open" method="POST" style="width: 60%">
            @csrf

            <div class="form-input" style="margin-bottom: 10px;">
                <label>Name</label> <input type="text" name="Name">
            </div>

            <div class="form-input" style="margin-bottom: 10px">
                <label>Location</label>
                <input type="text" name="Location">
            </div>


            <div class="form-input" style="margin-bottom: 10px">

                <label>Category</label>
                
                @foreach ($allCategories as $category)
                <input type="radio" id="{{ $category->Category }}" name="Category" value="{{ $category->Category }}">
                <label for="{{ $category->Category }}">{{ $category->Category }}</label>
                @endforeach
                <input type="radio" id="categoryOther" name="Category" value="">
                
                <label for="categoryOther">Other (Type in the new category below)</label>
                <textarea name="Category" rows="1" disabled id="otherField"></textarea>
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
