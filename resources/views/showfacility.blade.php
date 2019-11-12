@extends('layouts.app')

@section('content')
<section class="wrapper">
    <div class="inner">
        <header class="special">

            <h1>Show Facility</h1>
        </header>
    </div>


    <div class="inner">
        <div class="content">
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
                          <td><button type="submit" class="btn btn-danger">Delete</button></td>

                             </tr>
                    @endforeach
                              </form>
                    </tbody>
                </table>
            </div>
        <div class="content">
            <table>
                <thead>
                    <td></td>
                    <td><?php $today = new DateTime(); echo $today->format('m/d'); ?></td>
                    <td><?php $today->modify('+1 day'); echo $today->format('m/d'); ?></td>
                    <td><?php $today->modify('+1 day'); echo $today->format('m/d'); ?></td>
                    <td><?php $today->modify('+1 day'); echo $today->format('m/d'); ?></td>
                    <td><?php $today->modify('+1 day'); echo $today->format('m/d'); ?></td>
                    <td><?php $today->modify('+1 day'); echo $today->format('m/d'); ?></td>
                    <td><?php $today->modify('+1 day'); echo $today->format('m/d'); ?></td>
                </thead>
                <tbody>
                    <tr id="row1" name="row1">
                        <td>8am ~ 9am</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row2" name="row2">
                        <td>9am ~ 10am</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row3" name="row3">
                        <td>10am ~ 11am</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row4" name="row4">
                        <td>11am ~ 12pm</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row5" name="row5">
                        <td>12pm ~ 1pm</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row6" name="row6">
                        <td>1pm ~ 2pm</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row7" name="row7">
                        <td>2pm ~ 3pm</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row8" name="row8">
                        <td>3pm ~ 4pm</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row1" name="row1">
                        <td>8am ~ 9am</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row1" name="row1">
                        <td>8am ~ 9am</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row1" name="row1">
                        <td>8am ~ 9am</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row1" name="row1">
                        <td>8am ~ 9am</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row1" name="row1">
                        <td>8am ~ 9am</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row1" name="row1">
                        <td>8am ~ 9am</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row1" name="row1">
                        <td>8am ~ 9am</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row1" name="row1">
                        <td>8am ~ 9am</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row1" name="row1">
                        <td>8am ~ 9am</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row1" name="row1">
                        <td>8am ~ 9am</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row1" name="row1">
                        <td>8am ~ 9am</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row1" name="row1">
                        <td>8am ~ 9am</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row1" name="row1">
                        <td>8am ~ 9am</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row1" name="row1">
                        <td>8am ~ 9am</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</section>
@endsection
