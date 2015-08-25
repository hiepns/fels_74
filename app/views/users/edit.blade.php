@extends('layout.default')
@section('content')

<h1>Edit profile</h1>

<div class='row'>
    <div class='col-md-6 col-md-offset-3'>
        {{ Form::open(['route' => ['users.update', $user->id], 'method' => 'PUT', 'files' => true]) }}
            @include('shared.errors_message')

            {{ Form::label('Username') }}
            {{ Form::text('username', $user->username, ['class' => 'form-control', 'autofocus' => 'autofocus']) }}

            {{ Form::label('Email') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control']) }}

            {{ Form::label('Avatar') }}
            {{ Form::file('avatar') }}

            {{ Form::label('Password') }}
            {{ Form::password('password', ['class' => 'form-control']) }}

            {{ Form::label('Confirmation') }}
            {{ Form::password('password_confirmation', ['class' => 'form-control']) }}

            {{ Form::submit('Save changes', ['class' => 'btn btn-primary']) }}

        {{ Form::close() }}
    </div>
</div>

@stop
