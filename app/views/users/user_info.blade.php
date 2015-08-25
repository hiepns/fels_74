<aside class='col-md-5'>
    <div class='row'>
        <section class='col-md-5'>
            {{ HTML::image($user->avatar->url('medium'), $user->username, ['class' => 'gravatar']) }}
        </section>
        <section class='col-md-7 user_info'>
            <h1>
                {{ $user->username }}
            </h1>

            @if (empty($followers) && empty($followings))
                @include('users.follow_form')
            @endif
        </section>
    </div>

    <section class='col-md-5 stats'>
        <a href='{{ route('users.followings.index', $user->id) }}'>
            <strong id='following'>
                {{ $user->followings->count() }}
            </strong>
            followings
        </a>

        <a href='{{ route('users.followers.index', $user->id) }}'>
            <strong id='followers'>
                {{ $user->followers->count() }}
            </strong>
            followers
        </a>
    </section>
</aside>
