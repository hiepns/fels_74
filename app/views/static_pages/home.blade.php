@extends('layout.default')
@section('content')

@if (!Auth::check())
    <div class='center jumbotron'>
        <h1>Welcome to E-learning System</h1>
        <a href='{{ url('/signup') }}' class='btn btn-lg btn-primary'>
            Sign up now!
        </a>
    </div>
@else
    <div class='row'>
        <aside class='col-md-5'>
            <div class='row'>
                <section class='col-md-5'>
                    {{ HTML::image(Auth::user()->avatar->url('medium'), Auth::user()->username, ['class' => 'gravatar']) }}
                </section>
                <section class='col-md-7 user_info'>
                    <h1>
                        {{ Auth::user()->username }}
                    </h1>
                    <a href='{{ route('users.show', Auth::user()->id) }}'>
                        <h4>view my profile</h4>
                    </a>
                </section>
            </div>

            <section class='stats'>
                <a href='{{ route('users.followings.index', Auth::user()->id) }}'>
                    <strong id='following'>
                        {{ Auth::user()->followings->count() }}
                    </strong>
                    followings
                </a>

               <a href='{{ route('users.followers.index', Auth::user()->id) }}'>
                    <strong id='followers'>
                        {{ Auth::user()->followers->count() }}
                    </strong>
                    followers
                </a>
            </section>
        </aside>

        <div class='col-md-7 home_btn'>
            <a href='{{ url('/word_list') }}' class='btn btn-lg btn-primary'>Words</a>
            <a href='{{ url('/categories') }}' class= 'btn btn-lg btn-primary'>Lesson</a>
        </div>
    </div>
@endif

@stop
