@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">
<section class="wrapper">
    @if($user["penalty_status"] == "0" || $user["penalty_status"] == "1" || $user["penalty_status"] == "2")
    <div style="width: 60%" class="inner">
        <header class="special">

            <h2 style="font-family:'Bitter', serif; text-align:center; font-size:60px">Open</h2>
        </header>
        <a href="/home" class="button"><i class="fa fa-arrow-left"> Back</i></a>
    </div>


    <div class="inner" style="margin-bottom: 20px; text-align: right; width: 60%">
        @if($user["role"] == "staff")
        <a href="/open/create" class="button medium">Create Facility</a>
        @endif
    </div>

    @foreach ($allCategories as $category)
    <div style="width: 60%" class="inner">
        <h2 style="font-weight:bold">{{ $category->Category }}
<!--
        <button id="{{ $category->Category }}" href="#"
           onclick="$('.{{ $category->Category }}').slideToggle(function(){$('#{{ $category->Category }}').html($('.{{ $category->Category }}').is(':visible')?'Fold':'Unfold');});" style="height:2rem; padding: 0 0.5rem; line-height: 2rem; margin-left: 30px; font-size: 15px">Unfold</button>
-->
        </h2>

        <div>
            <table>
                <thead>
                <td style="font-weight: bold">Name</td>
                <td></td>
                <td></td>
                </thead>
                <tbody>
                @foreach ($allFacilities as $facility)
                @if ($facility->Category == $category->Category && $facility->Type == "Open")
                <form class = "delete" action="{{ route('open.destroy',$facility->Facility_ID) }}" method="POST">
                    <tr>
                        <td>{{ $facility->Name }}</td>
                        @csrf
                        <td align="right">
                        @if($user["role"] == "staff")
                        <a href="{{ route('open.edit',$facility->Facility_ID) }}" class="button">Edit</a>
                        @method('DELETE')
                        <button type="submit">Delete</button>
                        @endif
                        </td>
                        <td align="right"><a href="{{ route('open.show',$facility->Facility_ID) }}" class="button">Time table</a></td>
                    </tr>
                </form>
                @endif
                @endforeach

                </tbody>
            </table>


        </div>
    </div>

    <script>
        $(".delete").on("submit", function(){
            return confirm("Do you really want to delete this facility?");
        });
    </script>

    @endforeach
    @elseif($user["penalty_status"] == "3")
    <div style="width: 60%" class="inner">
        <header class="special">

            <h2 style="font-family:'Bitter', serif; text-align:center; font-size:60px">You are not allowed</h2>
        </header>
        <a href="/home" class="button"><i class="fa fa-arrow-left"> Back</i></a>
    </div>
    @endif
</section>
@endsection
