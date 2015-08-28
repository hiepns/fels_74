<?php

class FollowersController extends \BaseController {

    public function index($user_id)
    {
        $user = User::findOrFail($user_id);
        $followers = $user->followers()->paginate(5);

        return View::make('followers.index', compact('user', 'followers'))
            ->with('title', $user->username);
    }
}
