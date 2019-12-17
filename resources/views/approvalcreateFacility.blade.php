@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">
<section class="wrapper">
    <div class="inner" style="width: 60%">
        <a href="/approval" class="button"><i class="fa fa-arrow-left"> Back</i></a>
        <header class="special">

            <h1 style="font-family:'Bitter', serif; text-align:center; font-size:60px">Create Facility</h1>
        </header>
    </div>
    <div class="inner" style="display:flex; justify-content:center; align-items:center">
        <form action="/approval" method="POST" style="width: 60%" enctype="multipart/form-data">
            @csrf

            <div class="form-input" style="margin-bottom: 10px;">
                <label>Room Name</label> <input type="text" name="Name" required>
            </div>

            <div class="form-input" style="margin-bottom: 10px">
                <label>Room Number</label>
                <input type="text" name="Location" required>
            </div>


            <div class="form-input" style="margin-bottom: 10px">

                <label>Building</label>
                
                @foreach ($allCategories as $category)
                <input type="radio" id="{{ $category->Category }}" name="Category" value="{{ $category->Category }}" required>
                <label for="{{ $category->Category }}">{{ $category->Category }}</label>
                @endforeach
                <input type="radio" id="categoryOther" name="Category" value="">
                
                <label for="categoryOther">Other</label>
                <textarea style="display:none" name="Category" rows="1" id="otherField" placeholder="Type in the new building" required></textarea>
            </div>

            <div class="form-input" style="margin-bottom: 10px">
                <label>Capacity</label> <input type="number" min="1" max="1000" width="100%" name="Capacity" required>
            </div>
            
            <div class="form-input" style="margin-bottom: 10px">
                <label>Description</label>
                <textarea maxlength="300" name="Description" style="rows:7; cols: 40; height: 150px"></textarea>
            </div>
            
            <input type="hidden" id="Approval" name="Type" value="Approval">
            <input type="hidden" id="Available" name="Status" value="Available">

            <button type="submit" style="margin-top:10px">Create</button>
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
        otherField.style.display = "";
        otherField.value = tempCategory;
      } else {
        tempCategory = otherField.value;
        otherField.value = "";
        otherField.style.display = "none";
      }
}
</script>
@endsection
