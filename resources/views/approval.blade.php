@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">
<section class="wrapper">
    <div class="inner">
        <header class="special">

            <h2 style="font-family:'Bitter', serif; text-align:center; font-size:60px">Approval</h2>
        </header>
    </div>


    <div class="inner" style="margin-bottom: 20px; text-align: right">
        <a href="/approval/create" class="button medium">Create Facility</a>
    </div>

    <div class="inner">
        <h2>Dorm A
        <button id="more" href="#"
           onclick="$('.details').slideToggle(function(){$('#more').html($('.details').is(':visible')?'Fold':'Unfold');});" style="height:2rem; padding: 0 0.5rem; line-height: 2rem; margin-left: 30px">Unfold</button>
        </h2>
        
        <div class="details" style="display:none">
            <table>
                <thead>
                <td>Name</td>
                <td>Action</td>

                </thead>
                <tbody>
                @foreach ($allFacilities as $facility)
                @if ($facility->Category == "DormA" && $facility->Type == "Approval")
                <form action="{{ route('facility.destroy',$facility->Facility_ID) }}" method="POST">
                    <tr>
                        <td>{{ $facility->Name }}</td>
                        @csrf
                        <td><a href="{{ route('facility.show',$facility->Facility_ID) }}" class="button">Time table</a>
                            <a href="{{ route('facility.edit',$facility->Facility_ID) }}" class="button">Edit</a></td>
                        @method('DELETE')
                        <td>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                </form>
                @endif
                @endforeach

                </tbody>
            </table>


        </div>
        
<!--
        <button id="more" href="#"
           onclick="$('.details').slideToggle(function(){$('#more').html($('.details').is(':visible')?'Show Less':'Show More');});" style="height:3rem; padding: 0 1rem">Show More</button>
-->


    </div>
<br>
    <div class="inner">
        <h2>Dorm B
        <button id="more2" href="#"
           onclick="$('.details2').slideToggle(function(){$('#more2').html($('.details2').is(':visible')?'Fold':'Unfold');});" style="height:2rem; padding: 0 0.5rem; line-height: 2rem; margin-left: 30px">Unfold</button>
        </h2>
        
        <div class="details2" style="display:none">
            <table>
                <thead>
                <td>Name</td>
                <td>Action</td>


                </thead>
                <tbody>
                @foreach ($allFacilities as $facility)
                @if ($facility->Category == "DormB" && $facility->Type == "Approval")
                <form action="{{ route('facility.destroy',$facility->Facility_ID) }}" method="POST">
                    <tr>
                        <td>{{ $facility->Name }}</td>
                        @csrf
                        <td><a href="{{ route('facility.show',$facility->Facility_ID) }}" class="button">Time table</a>
                            <a href="{{ route('facility.edit',$facility->Facility_ID) }}" class="button">Edit</a></td>
                        @method('DELETE')
                        <td>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                </form>
                @endif
                @endforeach

                </tbody>
            </table>
        </div>
        
    </div>

</section>
@endsection
