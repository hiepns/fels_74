@extends('layout.default')
@section('content')

<div class='row'>
    @include('users.user_info')

    <div class='col-md-7'>
        <h3>Followings</h3>

        <ul class='users'>
            @foreach ($followings as $following)
                <li>
                    <img src='{{ $following->getAvatar() }}' alt='{{ $following->username }}'>
                    <a href='{{ route('users.show', $following->id) }}'>{{ $following->username }}</a>
                </li>
            @endforeach
        </ul>

        {{ $followings->links() }}
    </div>
</div>

@stop
