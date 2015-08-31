@extends('layout.default')
@section('content')

<div class='row'>
    @include('users.user_info')

    <div class='col-md-7'>
        <h3>Activities</h3>
        <ul class='users'>
            @foreach ($activities as $activity)
                <li>
                    {{ HTML::image($user->avatar->url('medium'), $user->username) }}
                    {{ $activity->content }} - ({{ $activity->created_at }})
                </li>
            @endforeach
        </ul>

        {{ $activities->links() }}
    </div>
</div>

@stop
