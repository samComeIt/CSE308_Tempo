@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">

<style>
.searchEmail {
  border: 3px solid #13136b;
  border-right: none;
  padding: 5px;
  height: 20px;
  border-radius: 10px;
  outline: none;
  margin-top: 50px;
  margin-left: 20px;
}

.searchEmail:focus{
  color: #13136b;
}

.searchButton {
/*  width: 40px;*/
  border: 1.1px solid #13136b;
/*  background: #13136b;*/
  text-align: center;
  color: #ffffff;
  border-radius: 10px;
  cursor: pointer;
  font-size: 17px;
}
</style>

<section class="wrapper">

    <section>


        <nav style="float:left; width:20%; font-size:20px; margin-right:60px; font-weight:bold; border-right: 3px solid #13136b; height: 70%">
            <ul style="padding: 20px"><a href="/mypage/current">Current Reservation</a></ul>
            <ul style="padding: 20px"><a href="/mypage/past">Past Reservation</a></ul>
            <ul style="padding: 20px"><a href="/mypage/cancel">Cancelled Reservation</a></ul>
            <ul style="padding: 20px"><a href="/mypage/penalty">Penalty</a></ul>
        </nav>

        <article>
            @if(Auth::user()->role == "student")
            <h2 style="font-family:'Bitter', serif; text-align:left; font-size:60px; margin-bottom:40px">Show My Penalty</h2>
            <div class="inner" style="float:left; width:70%; font-style: italic">
                This page is for students checking their penalty status if they have misused the facilities.<br>
                Students can see why they got penalty from the staff.<br>
                The maximum Penalty that students will get is 3 penalties. Students who get 3 penalties will be on the blacklist of this website and not able to make a reservation until their penalty status is reset by staff.
            </div>
            
            <div class="inner" style="float:left; width:70%; margin-top:40px">
                <table>
                    <thead>

                    <td style="font-weight: bold">Reason</td>
                    <td style="font-weight: bold">Created</td>
                    </thead>
                    <tbody>
                    @foreach ($allPenalties as $user)
                    @if (Auth::user()->id == $user->user_id )
                    <tr style="background-color: white; height:60px">

                        <td class="inner-table" style="vertical-align: middle">{{ $user->reason }}</td>
                        <td class="inner-table" style="vertical-align: middle">{{ $user->created_at }}</td>

                    </tr>
                    @endif
                    @endforeach

                    </tbody>
                </table>
            </div>

            @elseif(Auth::user()->role == "staff")
            <h2 style="font-family:'Bitter', serif; text-align:left; font-size:60px; margin-bottom:40px">Give Penalty</h2>
            <div class="inner" style="float:left; width:70%; font-style: italic">
                This page is for staff giving penalties to students who misused the facilities.
                For example, breaking properties or not cleaning rooms.<br>
                By clicking the 'Give Penalty' button, staff can fill in the reason why the student is getting penalty, and the Penalty Status will increase by 1 after submission.<br>
                The maximum Penalty that student will get is 3 penalties. Students who get 3 penalties will be on the blacklist of this website and not able to make a reservation until their penalty status is reset by staff. 
            </div>
            
            <div class="inner" style="float:left; width:70%; margin-top:50px">
                <form>
                    <div class="col-sm-5 form-group" style="margin-bottom: 50px">
                        <div class="input-group">
                            <input class="form-control" id="search"
                                   value="{{ request('search') }}"
                                   placeholder="Search name" name="email"
                                   type="text" id="search" style="border-radius:6px"/>
                            <div class="input-group-btn">
                                <button type="submit" id="searchButton"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>


                    <table>
                        <thead>
                        <td style="font-weight: bold">Name</td>
                        <td style="font-weight: bold">Email</td>
                        <td style="font-weight: bold">Penalty Status</td>
                        <td style="font-weight: bold"></td>
                        </thead>
                        <tbody>



                        @foreach ($allUsers as $find)
                        @if ($find->role=="student" )
                        <tr style="background-color: white; height:60px">
                            <td class="inner-table" style="vertical-align: middle">{{ $find->name }}</td>
                            <td class="inner-table" style="vertical-align: middle">{{ $find->email }}</td>
                            <td class="inner-table" style="vertical-align: middle">{{ $find->penalty_status }}</td>

                            @if ($find->penalty_status != "3")
                            <td><a href="{{ route('penalty.edit',$find->id) }}" class="button">Give Penalty</a></td>
                            @elseif ($find->penalty_status=="3")
                            <td><a onclick="return confirm('Maximum penalty given')" class="button">Give Penalty</a></td>
                            @endif
                            <td><a href="{{ route('penalty.show',$find->id) }}" class="button">Reset Penalty</a></td>
                        </tr>
                        @endif
                        @endforeach

                        </tbody>
                    </table>
                </form>
            </div>
            @endif


        </article>


    </section>

<!--
    <script>
        function search_email() {
            let input = document.getElementById('searchEmail').value
            input=input.toLowerCase();
            let x = document.getElementsByClassName('animals');

            for (i = 0; i < x.length; i++) {
                if (!x[i].innerHTML.toLowerCase().includes(input)) {
                    x[i].style.display="none";
                }
                else {
                    x[i].style.display="list-item";
                }
            }
        }
    </script>
-->

</section>
