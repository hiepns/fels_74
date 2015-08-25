@extends('layout.default')
@section('content')

<h1>Sign up</h1>

<div class='row'>
    <div class='col-md-6 col-md-offset-3'>
        {{ Form::open(['route' => 'users.store', 'files' => true]) }}
            @include('shared.errors_message')

            {{ Form::label('Username') }}
            {{ Form::text('username', null, ['class' => 'form-control', 'autofocus' => 'autofocus']) }}

            {{ Form::label('Email') }}
            {{ Form::text('email', null, ['class' => 'form-control']) }}

            {{ Form::label('Avatar') }}
            {{ Form::file('avatar') }}

            {{ Form::label('Password') }}
            {{ Form::password('password', ['class' => 'form-control']) }}

            {{ Form::label('Confirmation') }}
            {{ Form::password('password_confirmation', ['class' => 'form-control']) }}

            {{ Form::submit('Create my account', ['class' => 'btn btn-primary']) }}

        {{ Form::close() }}
    </div>
</div>

@stop
