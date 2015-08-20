@extends('layout.default')
@section('content')

<div class="row">
    <aside class="col-md-4">
        <section class="user_info">
            <h1>
                {{ HTML::image(Auth::user()->avatar, Auth::user()->username, ['class' => 'gravatar']) }}
                <a href="{{ route('users.show', [Auth::user()->id]) }}">{{ Auth::user()->username }}</a>
            </h1>
        </section>
    </aside>

    <div class="col-md-8">
        <h3>Activities</h3>
    </div>
</div>

@stop
