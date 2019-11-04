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
                <td><a href="{{ route('facility.show',$facility->Facility_ID) }}" class="button">Show</a></td>
                @method('DELETE')
                <td><button type="submit" class="btn btn-danger">Delete</button>   </td>
                </tr></form>
                @endif
            @endforeach
            </form>
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
            @if ($facility->Location == "DormB" && $facility->Type == "Approval")
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
            </form>
            </tbody>
        </table>
    </div>


</section>
@endsection
