<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>View Facility | Facilities</title>
    <!-- Styles etc. -->
</head>
<body>
<div class="flex-center position-ref full-height">


    <div class="content">
        <h1>Dorm A</h1>
        <table>
            <thead>
            <td>Name</td>
            <td>Location</td>
            <td>Category</td>
            <td>Type</td>
            <td>Capacity</td>
            <td>Picture</td>
            <td>Status</td>
            <td>Action</td>
            </thead>
            <tbody>
            @foreach ($allFacilities as $facility)
            @if ($facility->Location == "DormA")
            <tr>
                <td>{{ $facility->Name }}</td>
                <td class="inner-table">{{ $facility->Location }}</td>
                <td class="inner-table">{{ $facility->Category }}</td>
                <td class="inner-table">{{ $facility->Type }}</td>
                <td class="inner-table">{{ $facility->Capacity }}</td>
                <td class="inner-table">{{ $facility->Picture }}</td>
                <img class="inner-table" src="{{url('uploads/'.$facility->Picture)}}" alt="{{$facility->Picture}}">
                <td class="inner-table">{{ $facility->Status }}</td>


                <td><a class="btn btn-info" href="{{ route('facility.show',$facility->Facility_ID) }}" method="POST">Show</a>
                </td>
            </tr>
            @endif
            @endforeach
            </tbody>
        </table>

        <h1>Dorm B</h1>
        <table>
            <thead>
            <td>Name</td>
            <td>Location</td>
            <td>Category</td>
            <td>Type</td>
            <td>Capacity</td>
            <td>Picture</td>
            <td>Status</td>
            <td>Action</td>
            </thead>
            <tbody>
            @foreach ($allFacilities as $facility)
            @if ($facility->Location == "DormB")
            <tr>
                <td>{{ $facility->Name }}</td>
                <td class="inner-table">{{ $facility->Location }}</td>
                <td class="inner-table">{{ $facility->Category }}</td>
                <td class="inner-table">{{ $facility->Type }}</td>
                <td class="inner-table">{{ $facility->Capacity }}</td>
                <td class="inner-table">{{ $facility->Picture }}</td>
                <img class="inner-table" src="{{url('uploads/'.$facility->Picture)}}" alt="{{$facility->Picture}}">
                <td class="inner-table">{{ $facility->Status }}</td>


                <td><a class="btn btn-info" href="{{ route('facility.show',$facility->Facility_ID) }}" method="POST">Show</a>
                </td>
            </tr>
            @endif
            @endforeach
            </tbody>
        </table>
    </div>

</div>
</body>
</html>
