@extends('layout.default')
@section('content')
    <div class="center jumbotron">
        <h1>Welcome to E-learning System</h1>
        <a href="{{ url('/signup') }}" class="btn btn-lg btn-primary">
            Sign up now!
        </a>
    </div>
@stop
