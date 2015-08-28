<?php

class FollowingsController extends \BaseController {

    public function index($user_id)
    {
        $user = User::findOrFail($user_id);
        $followings = $user->followings()->paginate(5);

        return View::make('followings.index', compact('user', 'followings'))
            ->with('title', $user->username);
    }
}
