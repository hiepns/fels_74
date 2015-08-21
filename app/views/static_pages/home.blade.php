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
        <aside class="col-md-5">
            <section class="user_info">
                <h1>
                    {{ HTML::image(Auth::user()->getAvatar(), Auth::user()->username, ['class' => 'gravatar']) }}
                    <a href="{{ route('users.show', [Auth::user()->id]) }}">{{ Auth::user()->username }}</a>
                </h1>
            </section>

            <section class="stats">
                <a>
                    <strong id="following">
                        {{ count(Auth::user()->followings()->lists('follower_id')) }}
                    </strong>
                    followings
                </a>
                
                <a>
                    <strong id="followers">
                        {{ count(Auth::user()->followers()->lists('followed_id')) }}
                    </strong>
                    followers
                </a>
            </section>
        </aside>

        <div class="col-md-7 home_btn">
            <a href="#" class='btn btn-lg btn-primary'>Words</a>
            <a href="#" class= 'btn btn-lg btn-primary'>Lesson</a>
        </div>
    </div>
@endif

@stop
