@extends('layouts.app')

@section('content')
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
@endsection
