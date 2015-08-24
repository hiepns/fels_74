@extends('layout.default')
@section('content')

<div class='row'>
    @include('users.user_info')

    <div class='col-md-7'>
        <h3>Followers</h3>

        <ul class='users'>
            @foreach ($followers as $follower)
                <li>
                    <img src='{{ $follower->getAvatar() }}' alt='{{ $follower->username }}'>
                    <a href='{{ route('users.show', $follower->id) }}'>{{ $follower->username }}</a>
                </li>
            @endforeach
        </ul>

        {{ $followers->links() }}
    </div>
</div>

@stop
