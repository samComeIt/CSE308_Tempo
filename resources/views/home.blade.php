@extends('layouts.app')

@section('content')

<section id="main" class="wrapper">
    @if($user["penalty_status"] != "3")
    <div class="inner">
        <div class="content">
            <h2 style="font-family:'Bitter', serif; text-align:center; font-size: 60px">TEMPO</h2>
            @csrf
            <section>
                <div class="content"
                     style="float: left; padding: 70px; margin-top: 90px; text-align: center; border-style: solid; color: #13136b; border-width: 5px; border-radius: 15px; font-family:'Didact Gothic', sans-serif;">
                    <ul class="actions">
                        <li>
                            <a href="/approval" class="button primary"
                               style="background-color: white; text-align: center; color: #13136b; font-size: 30px">Approval</a>
                        </li>
                    </ul>
                </div>
            </section>

            <section>
                <div class="content"
                     style="float: right; padding: 70px; border-radius: 15px; margin-top: 90px; margin-right: 50px; text-align: center; color: #13136b; border-style: solid; border-width: 5px; font-family:'Didact Gothic', sans-serif;">
                    <!-- padding-right: 90px; padding-left: 90px; -->
                    <ul class="actions">
                        <li>
                            <a href="/open" class="button primary"
                               style="background-color: white; text-align: center; display: inline; color: #13136b; font-size: 30px">Open</a>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    @else
    <div style="width: 60%" class="inner">
        <header class="special">

            <h2 style="font-family:'Bitter', serif; text-align:center; font-size:60px">You are not allowed</h2>
        </header>
        <a href="/home" class="button"><i class="fa fa-arrow-left"> Back</i></a>
    </div>
    @endif
</section>
@endsection
