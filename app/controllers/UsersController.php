<?php

class UsersController extends \BaseController {

    public function create()
    {
        return View::make('users.create')
            ->with('title', 'Signup');
    }

    public function store()
    {
        $valid = Validator::make(Input::all(), User::createValidator());

        if ($valid->passes()) {
            $user = new User();
            $user->username = Input::get('username');
            $user->email = Input::get('email');
            $user->avatar = Input::file('avatar');
            $user->password = Hash::make(Input::get('password'));
            $user->save();

            return Redirect::to('/login')
                ->with('alert-success', 'Signup successfully!');
        }

        return Redirect::route('users.create')
            ->withErrors($valid)
            ->withInput();
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return View::make('users.show', ['title' => $user->username, 'user' => $user]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return View::make('users.edit')
            ->with('title', 'Edit Profile')
            ->with('user', $user);
    }

    public function update($id)
    {
        $user = User::findOrFail($id);

        $isSameEmail = ($user->email == Input::get('email')) ? true : false;
        $valid = Validator::make(Input::all(), User::createValidator($isSameEmail));

        if ($valid->passes()) {
            $newUserData = [
                'username' => Input::get('username'),
                'email' => Input::get('email'),
                'avatar' => Input::file('avatar'),
                'password' => Hash::make(Input::get('password'))
            ];
            $user->update($newUserData);

            return Redirect::route('users.show', $id)
                ->with('alert-success', 'Update profile successfully!');
        }

        return Redirect::route('users.edit', $id)
            ->withErrors($valid)
            ->withInput();
    }
}
