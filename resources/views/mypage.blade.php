@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">
<section class="wrapper">
<!--
    <div class="inner">
        <header class="special">

            <h2 style="font-family:'Bitter', serif; text-align:center; font-size:60px">My Page</h2>
        </header>
    </div>
-->
    <section>
        <nav style="float:left; width:20%; font-size:20px; margin-right:50px; font-weight:bold">
            <ul style="padding: 20px"><a href="/mypage/current">Current Reservation</a></ul>
            <ul style="padding: 20px"><a href="/mypage/past">Past Reservation</a></ul>
            <ul style="padding: 20px"><a href="/mypage/report">Report</a></ul>
            <ul style="padding: 20px"><a href="/mypage/penalty">Penalty</a></ul>
        </nav>
        
        <article>
            <h2 style="font-family:'Bitter', serif; text-align:left; font-size:60px">My Page</h2>
            <div class="inner" style="float:left; width:70%;">
                <table>
                    <thead>
                        <td>Date</td>
                        <td>Location</td>
                        <td>Purpose</td>
                    </thead>
                    

                </table>
            </div>
        </article>
    </section>
</section>
