@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">
<!--
<section class="wrapper">
    <section>
        <nav style="float:left; width:20%; font-size:20px; margin-right:60px; font-weight:bold; border-right: 3px solid #13136b; height: 500px">
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
-->


<!-- Give Penalty -->
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
        <nav style="float:left; width:20%; font-size:20px; margin-right:60px; font-weight:bold; border-right: 3px solid #13136b; height: 500px">
            <ul style="padding: 20px"><a href="/mypage/current">Current Reservation</a></ul>
            <ul style="padding: 20px"><a href="/mypage/past">Past Reservation</a></ul>
            <ul style="padding: 20px"><a href="/mypage/report">Report</a></ul>
            <ul style="padding: 20px"><a href="/mypage/penalty">Penalty</a></ul>
        </nav>
        
        <article>
            <h2 style="font-family:'Bitter', serif; text-align:left; font-size:60px; margin-bottom:50px">Give Penalty</h2>
            <div class="inner" style="float:left; width:70%;">
                <form>
                    <input type="email" id="searchEmail" placeholder="Type student's e-mail here" style="width:60%; display: inline">
                    <button type="submit" id="searchButton"><i class="fa fa-search"></i></button>
                    <ol id="list"></ol>
                </form>
            </div>
        </article>
    </section>
    
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
    
</section>