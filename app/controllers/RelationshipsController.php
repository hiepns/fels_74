<?php

class RelationshipsController extends \BaseController {

    public function store()
    {
        $user = User::findOrFail(Input::get('followed_id'));
        Auth::user()->followings()->save($user);
    }

    public function destroy($id)
    {
    	Auth::user()->followings()->detach($id);
    }
}
