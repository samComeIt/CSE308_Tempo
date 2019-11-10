@extends('layouts.app')

@section('content')

<section id="main" class="wrapper">
    <div class="inner">
        <div class="content">
            <h2 style="font-family:'Bitter', serif; text-align:center; font-size: 50px; margin-top:25px">TEMPO</h2>
                @csrf
                <section>
                <div class="content" style="float: left; padding: 70px; margin-top: 90px; text-align: center; border-style: solid; color: #13136b; border-width: 5px; border-radius: 15px; font-family:'Didact Gothic', sans-serif;">
                    <ul class="actions">
                        <li>
                            <a href="/approval" class="button primary" style="background-color: white; text-align: center; color: #13136b; font-size: 30px" >Approval</a>
                        </li>
                    </ul>
                </div>
                </section>
                
                <section>
                <div class="content" style="float: right; padding: 70px; border-radius: 15px; margin-top: 90px; margin-right: 50px; text-align: center; color: #13136b; border-style: solid; border-width: 5px; font-family:'Didact Gothic', sans-serif;">
                    <!-- padding-right: 90px; padding-left: 90px; -->
                    <ul class="actions">
                        <li>
                            <a href="/open" class="button primary" style="background-color: white; text-align: center; display: inline; color: #13136b; font-size: 30px">Open</a>
                        </li>
                    </ul>
                </div>
                </section>
            
        </div>
    </div>
</section>

<!--
<style>
    .center {
        height: 200px;
        position: relative;
        border: 3px solid green;
    }

    .center p {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
</style>

<link href="https://fonts.googleapis.com/css?family=Bitter:700|Didact+Gothic|Patua+One&display=swap" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><br></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                    <section>


                    <nav style="float: left; width: 20%; padding: 80px; margin-left: 160px; margin-top: 130px; text-align: center;  border-style: solid; border-width: 5px; font-family:'Didact Gothic', sans-serif;">
                        <a href="/approval"; style="font-size:200%" class="button large">Approval</a>
                    </nav>
                        <div class="col-6 col-12-xsmall"> <a href="/approval"; style="font-size:200%" class="button large">Approval</a></div>

                    <nav style="float: right; padding: 80px; width: 20%; background-color: white; border-radius: 15px; margin-right: 160px; margin-top: 130px; text-align: center; color: #13136b; border-style: solid; border-width: 5px; font-family:'Didact Gothic', sans-serif;">
                        <a href="#"; style="font-size:200%"; class="button large">Open</a>
                    </nav>

                    </section>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->
@endsection
