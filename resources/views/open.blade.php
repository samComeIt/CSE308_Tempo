@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">
<section class="wrapper">
    <div class="inner">
        <header class="special">

            <h2 style="font-family:'Bitter', serif; text-align:center; font-size:60px">Open</h2>
        </header>
    </div>


    <div class="inner" style="margin-bottom: 20px; text-align: right">
        <a href="/open/create" class="button medium">Create Facility</a>
    </div>

    @foreach ($allCategories as $category)
    <div class="inner">
        <h2>{{ $category->Category }}
<!--
        <button id="{{ $category->Category }}" href="#"
           onclick="$('.{{ $category->Category }}').slideToggle(function(){$('#{{ $category->Category }}').html($('.{{ $category->Category }}').is(':visible')?'Fold':'Unfold');});" style="height:2rem; padding: 0 0.5rem; line-height: 2rem; margin-left: 30px; font-size: 15px">Unfold</button>
-->
        </h2>
        
        <div>
            <table>
                <thead>
                <td>Name</td>
                <td>Action</td>

                </thead>
                <tbody>
                @foreach ($allFacilities as $facility)
                @if ($facility->Category == $category->Category && $facility->Type == "Open")
                <form action="{{ route('open.destroy',$facility->Facility_ID) }}" method="POST">
                    <tr>
                        <td>{{ $facility->Name }}</td>
                        @csrf
                        <td><a href="{{ route('open.show',$facility->Facility_ID) }}" class="button">Time table</a>
                            <a href="{{ route('open.edit',$facility->Facility_ID) }}" class="button">Edit</a></td>
                        @method('DELETE')
                        <td>
                            <button type="submit">Delete</button>
                        </td>
                    </tr>
                </form>
                @endif
                @endforeach

                </tbody>
            </table>


        </div>
    </div>
    @endforeach

</section>
@endsection
