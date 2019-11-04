@extends('layouts.app')

@section('content')
<section class="wrapper">
    <div class="inner">
        <header class="special">

            <h1>Show Facility</h1>
        </header>
    </div>


    <div class="inner">
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

                        @foreach ($facilities as $facility)
                         <form action="{{ route('facility.destroy',$facility->Facility_ID) }}" method="POST">
                            <tr>
                                <td>{{ $facility->Name }}</td>
                                <td class="inner-table">{{ $facility->Location }}</td>
                                <td class="inner-table">{{ $facility->Category }}</td>
                                <td class="inner-table">{{ $facility->Type }}</td>
                                <td class="inner-table">{{ $facility->Capacity }}</td>
                                <td class="inner-table">{{ $facility->Picture }}</td>
                                <img class="inner-table" src="{{url('uploads/'.$facility->Picture)}}" alt="{{$facility->Picture}}">
                                <td class="inner-table">{{ $facility->Status }}</td>
                                <td><a href="{{ route('facility.edit',$facility->Facility_ID) }}" class="button">Edit</a></td>

                    @csrf
                    @method('DELETE')
                          <td><button type="submit" class="btn btn-danger">Delete</button>   </td>

                             </tr>
                    @endforeach
                              </form>
                    </tbody>
                </table>
            </div>

</section>
@endsection
