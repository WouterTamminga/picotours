@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center top10">
        <h1 class="display-4">PicoTours!</h1>
        <div class="row top20">
            <div class="col-md-4 col-sm-4">

            </div>

            <div class="col-md-4 col-sm-4">
                <img src="/img/monkey.jpg" height="120px" width="250px" align="center" >
            </div>

            <div class="col-md-4 col-sm-4">

            </div>
        </div>
        <!--<hr class="my-4">-->
        <p class="lead">Hier kun je een tour boeken!</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">register</a>
        </p>
    </div>
@endsection