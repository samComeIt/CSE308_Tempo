@extends('layouts.app')

@section('content')
<section class="wrapper">
    <div class="inner">
        <header class="special">

            <h2 style="font-size:60px">Approval</h2>
        </header>
    </div>


    <div class="inner" style="margin-bottom: 20px">
        <a href="/approval/create" class="button medium">Create Facility</a>
    </div>

        <div class="inner">
            <h2>Dorm A</h2>


            <div class="details" style="display:none">
                <table>
                    <thead>
                    <td>Name</td>
                    <td>Action</td>

                    </thead>
                    <tbody>
                    @foreach ($allFacilities as $facility)
                    @if ($facility->Location == "DormA" && $facility->Type == "Approval")
                    <form action="{{ route('facility.destroy',$facility->Facility_ID) }}" method="POST">
                        <tr>
                            <td>{{ $facility->Name }}</td>
                            @csrf
                            <td><a href="{{ route('facility.show',$facility->Facility_ID) }}" class="button">Time table</a>
                            <a href="{{ route('facility.edit',$facility->Facility_ID) }}" class="button">Edit</a></td>
                            @method('DELETE')
                            <td><button type="submit" class="btn btn-danger">Delete</button>   </td>
                        </tr></form>
                    @endif
                    @endforeach

                    </tbody>
                </table>



            </div>
            <a id="more" href="#" onclick="$('.details').slideToggle(function(){$('#more').html($('.details').is(':visible')?'See Less Details':'See More Details');});">See More Details</a>



    </div>

    <div class="inner">
        <h2>Dorm B</h2>
        <div class="details2" style="display:none">
            <table>
            <thead>
            <td>Name</td>
            <td>Action</td>


            </thead>
            <tbody>
            @foreach ($allFacilities as $facility)
            @if ($facility->Location == "DormB" && $facility->Type == "Approval")
            <form action="{{ route('facility.destroy',$facility->Facility_ID) }}" method="POST">
                <tr>
                    <td>{{ $facility->Name }}</td>
                    @csrf
                    <td><a href="{{ route('facility.show',$facility->Facility_ID) }}" class="button">Time table</a>
                        <a href="{{ route('facility.edit',$facility->Facility_ID) }}" class="button">Edit</a></td>
                    @method('DELETE')
                    <td><button type="submit" class="btn btn-danger">Delete</button>   </td>
                </tr></form>
                    @endif
            @endforeach

            </tbody>
        </table>
    </div>
        <a id="more" href="#" onclick="$('.details2').slideToggle(function(){$('#more').html($('.details').is(':visible')?'See Less Details':'See More Details');});">See More Details</a>
    </div>

</section>
@endsection
