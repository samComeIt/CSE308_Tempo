@extends('layouts.app')

@section('content')
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
                    <nav style="float: left; width: 20%; background: white; border-radius: 15px; padding: 80px; margin-left: 160px; margin-top: 130px; text-align: center; color: #13136b; border-style: solid; border-width: 5px; font-family:'Didact Gothic', sans-serif;">
                        <h1 style="font-size:200%;">Approval</h1>
                    </nav>
                    
                    <nav style="float: right; padding: 80px; width: 20%; background-color: white; border-radius: 15px; margin-right: 160px; margin-top: 130px; text-align: center; color: #13136b; border-style: solid; border-width: 5px; font-family:'Didact Gothic', sans-serif;">
                        <h1 style="font-size:200%;">Open</h1>
                    </nav>
                    </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
