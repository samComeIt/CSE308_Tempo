@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">

<section class="wrapper">
    <div class="inner">
        <div class="content">

            <h2 style="font-family:'Bitter', serif; text-align:center; font-size:60px">Open</h2>
        </div>
    </div>


    <div class="inner" style="margin-bottom: 20px">
        <a href="/open/create" class="button medium">Create Facility</a>
    </div>

        <div class="inner">
        <h2>Dorm A</h2>
        <table>
            <thead>
            <td>Name</td>
            <td>Action</td>

            </thead>
            <tbody>
            @foreach ($allFacilities as $facility)
            @if ($facility->Location == "DormA" && $facility->Type == "Open")
            <form action="{{ route('facility.destroy',$facility->Facility_ID) }}" method="POST">
            <tr>
                <td>{{ $facility->Name }}</td>
                @csrf
                <td><a href="{{ route('facility.show',$facility->Facility_ID) }}" class="button">Show</a></td>
                @method('DELETE')
                <td><button type="submit" class="btn btn-danger">Delete</button>   </td>
                </tr></form>
                @endif
            @endforeach
            
            </tbody>
        </table>
    </div>

    <div class="inner">
        <h2>Dorm B</h2>
        <table>
            <thead>
            <td>Name</td>
            <td>Action</td>


            </thead>
            <tbody>
            @foreach ($allFacilities as $facility)
            @if ($facility->Location == "DormB" && $facility->Type == "Open")
            <form action="{{ route('facility.destroy',$facility->Facility_ID) }}" method="POST">
                <tr>
                    <td>{{ $facility->Name }}</td>
                    @csrf
                    <td><a href="{{ route('facility.show',$facility->Facility_ID) }}" class="button">Show</a></td>
                    @method('DELETE')
                    <td><button type="submit" class="btn btn-danger">Delete</button>   </td>
                </tr></form>
                    @endif
            @endforeach
            
            </tbody>
        </table>
    </div>


</section>
@endsection
