@extends('layout.default')
@section('content')

<h1>Log in</h1>

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {{ Form::open(['url'=>'/login']) }}
            @include('shared.errors_message')

            {{ Form::label('Email') }}
            {{ Form::text('email', null, ['class'=>'form-control', 'autofocus'=>'autofocus']) }}

            {{ Form::label('Password') }}
            {{ Form::password('password', ['class'=>'form-control']) }}

            {{ Form::hidden('_token', csrf_token()) }}

            {{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
        {{ Form::close() }}
    </div>
</div>

@stop
