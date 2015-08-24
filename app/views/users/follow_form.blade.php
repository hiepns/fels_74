@if (Auth::user()->id != $user->id)
    @if (Auth::user()->isFollowing($user->id))
        {{ Form::button('Unfollow', [
            'class' => 'btn remove', 
            'id' => 'remove', 
            'data-url' => route('relationships.destroy', $user->id)
        ]) }}

        {{ Form::button('Follow', [
            'class' => 'btn follow', 
            'id' => 'follow', 
            'style' => 'display:none',
            'data-url' => route('relationships.store'),
            'data-followedid' => $user->id
        ]) }}
    @else
        {{ Form::button('Follow', [
            'class' => 'btn follow', 
            'id' => 'follow',
            'data-url' => route('relationships.store'),
            'data-followedid' => $user->id
        ]) }}

        {{ Form::button('Unfollow', [
            'class' => 'btn remove', 
            'id' => 'remove', 
            'style' => 'display:none',
            'data-url' => route('relationships.destroy', $user->id)
        ]) }}
    @endif
@endif
