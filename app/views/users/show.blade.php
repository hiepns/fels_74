@extends('layout.default')
@section('content')

<div class="row">
    <aside class="col-md-5">
        <section class="user_info">
            <h1>
                {{ HTML::image($user->getAvatar(), $user->username, ['class' => 'gravatar']) }}
                {{ $user->username }}
            </h1>

            @include('users.follow_form')
        </section>

        <section class="stats">
            <a>
                <strong id="following">
                    {{ count($user->followings()->lists('follower_id')) }}
                </strong>
                followings
            </a>
            
            <a>
                <strong id="followers">
                    {{ count($user->followers()->lists('followed_id')) }}
                </strong>
                followers
            </a>
        </section>
    </aside>

    <div class="col-md-7">
        <h3>Activities</h3>
    </div>
</div>

@stop
