<?php

class SessionsController extends \BaseController {

    public function create()
    {
        return View::make('sessions.create')
            ->with('title', 'Login');
    }

    public function store()
    {
        $user = [
            'email' => Input::get('email'),
            'password' => Input::get('password')
        ];

        if (Auth::attempt($user)) {
            return Redirect::to('/')
                ->with('alert-success', 'You are successfully logged in.');
        }

        return Redirect::to('/login')
            ->with('alert-danger', 'Invalid username or password!')
            ->withInput();
    }

    public function destroy()
    {
        Auth::logout();
        
        return Redirect::to('/')
            ->with('alert-success', 'You are successfully logged out.');
    }
}
