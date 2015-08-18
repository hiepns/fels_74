<?php

class UsersController extends \BaseController {

    public function index()
    {
        
    }

    public function create()
    {
        return View::make('users.create')
            ->with('title', 'Signup');
    }  

    public function store()
    {
        $valid = Validator::make(Input::all(), User::$validates);

        if ($valid->passes()) {
            $user = new User();
            $user->username = Input::get('username');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->save();

            return Redirect::to('/')
                ->with('alert-success', 'Signup successfully!');
        } else {
            return Redirect::route('users.create')
                ->withErrors($valid)
                ->withInput();
        }
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return View::make('users.show')
            ->with('title', 'Profile')
            ->with('user', $user);
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
        
    }
}
