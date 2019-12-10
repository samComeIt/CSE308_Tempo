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
            <ul style="padding: 20px"><a href="/mypage/report">Report</a></ul>
            <ul style="padding: 20px"><a href="/mypage/penalty">Penalty</a></ul>
        </nav>

        <article>
            <h2 style="font-family:'Bitter', serif; text-align:left; font-size:60px; margin-bottom:50px">Penalty Form</h2>
            <div class="inner" style="float:left; width:70%;">

                    <table>
                        <thead>
                        <td style="font-weight: bold">Name</td>
                        <td style="font-weight: bold">Email</td>
                        <td style="font-weight: bold">Penalty Status</td>
                        </thead>
                        <tbody>

                        @foreach ($selectStu as $user)
                        @if ($user->role=="student" )
                        <tr style="background-color: white; height:60px">
                            <td class="inner-table" style="vertical-align: middle">{{ $user->name }}</td>
                            <td class="inner-table" style="vertical-align: middle">{{ $user->email }}</td>
                            <td class="inner-table" style="vertical-align: middle">{{ $user->penalty_status }}</td>
                        </tr>
                        @endif
                        @endforeach
                        </tbody>
                        
                    </table>
                
                    <form action="/mypage/penalty" method="POST" style="width: 60%">
                        @csrf
                        <div class="form-input" style="margin-bottom: 30px;">
                            <label style="font-size: 20px; margin-bottom: 10px">Reason</label> <textarea name="reason" style="rows:7; cols: 40; height: 150px" required></textarea>
                        </div>
                        <input type="hidden" name="reservation_id" value="0" readonly>
                        <input type="hidden" name="user_id" value= '{{ $user->id }}' readonly>
                        <button type="submit">Submit</button>
                    </form>
            </div>
        </article>
    </section>

</section>
