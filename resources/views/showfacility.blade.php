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
                        <img class="inner-table" src="{{url('uploads/'.$facility->Picture)}}"
                             alt="{{$facility->Picture}}">
                        <td class="inner-table">{{ $facility->Status }}</td>
                        <td><a href="{{ route('facility.edit',$facility->Facility_ID) }}" class="button">Edit</a></td>

                        @csrf
                        @method('DELETE')
                        <td>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </td>

                    </tr>
                    @endforeach
                </form>
                </tbody>
            </table>
        </div>

        <div class="content">
            <div class="form-popup" id="myForm">
                <table class="hoverTable" id="tabela">

                    <thead>
                    <td></td>
                    <td><?php $today = new DateTime();
                        echo $today->format('m/d'); ?></td>
                    <td><?php $today->modify('+1 day');
                        echo $today->format('m/d'); ?></td>
                    <td><?php $today->modify('+1 day');
                        echo $today->format('m/d'); ?></td>
                    <td><?php $today->modify('+1 day');
                        echo $today->format('m/d'); ?></td>
                    <td><?php $today->modify('+1 day');
                        echo $today->format('m/d'); ?></td>
                    <td><?php $today->modify('+1 day');
                        echo $today->format('m/d'); ?></td>
                    <td><?php $today->modify('+1 day');
                        echo $today->format('m/d'); ?></td>
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
                    <tr id="row9" name="row9">
                        <td>4pm ~ 5pm</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row10" name="row10">
                        <td>4pm ~ 5pm</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row11" name="row11">
                        <td>5pm ~ 6pm</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row12" name="row12">
                        <td>6pm ~ 7pm</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row13" name="row13">
                        <td>7pm ~ 8pm</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row14" name="row14">
                        <td>8pm ~ 9pm</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row15" name="row15">
                        <td>9pm ~ 10pm</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row16" name="row16">
                        <td>10pm ~ 11pm</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="row17" name="row17">
                        <td>11pm ~ 12pm</td>
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
    </div>
    <style style="text/css">
        .hoverTable {
            width: 100%;
            border-collapse: collapse;
        }

        .hoverTable tr, th {
            position: relative;
        }

        .hoverTable td {
            padding: 7px;
            border: #4e95f4 1px solid;
        }

        /* Define the default color for all the table rows */
        .hoverTable tr {
            background: #b8d1f3;
        }

        /* Define the hover highlight color for the table row */
        .hoverTable td:hover {
            background-color: #ffff99;
        }

        .hoverTable th:hover {
            background-color: #ffffff;
        }

        .hoverTable tr:hover {
            background-color: #ffffff;
        }

        .hoverTable tr, th {
            position: relative;
        }

    </style>


    <script>
        for(i=1;i<tabela.rows.length;i++){
            for(j=1;j<tabela.rows[i].cells.length;j++){
                tabela.rows[i].cells[j].onclick=function(i,j){
                    alert(tabela.rows[0].cells[j].innerText+" "+ tabela.rows[i].cells[0].innerText)
                    console.log(tabela.rows[0].cells[j].innerText)
                    console.log(tabela.rows[i].cells[0].innerText)
                    console.log(i+":"+j)

                }.bind(null,i,j)

            }
        }
    </script>
</section>

@endsection
