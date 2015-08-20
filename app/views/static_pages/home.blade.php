@extends('layout.default')
@section('content')


@if (!Auth::check())
    <div class="center jumbotron">
        <h1>Welcome to E-learning System</h1>
        <a href="{{ url('/signup') }}" class="btn btn-lg btn-primary">
            Sign up now!
        </a>
    </div>
@else
    <div class="row">
        <aside class="col-md-4">
            <section class="user_info">
                <h1>
                    {{ HTML::image(Auth::user()->avatar, Auth::user()->username, ['class' => 'gravatar']) }}
                    <a href="{{ route('users.show', [Auth::user()->id]) }}">{{ Auth::user()->username }}</a>
                </h1>
            </section>
        </aside>

        <div class="col-md-8 home_btn">
            <a href="#" class='btn btn-lg btn-primary'>Words</a>
            <a href="#" class= 'btn btn-lg btn-primary'>Lesson</a>
        </div>
    </div>
@endif

@stop
