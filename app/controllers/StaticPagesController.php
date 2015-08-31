<?php

class StaticPagesController extends \BaseController {

    public function home()
    {
        if (Auth::check()) {
            $activities = Auth::user()->activities()->paginate(5);

            return View::make('static_pages.home', compact('activities'))
                ->with('title', 'E-Learning System');
        }

        return View::make('static_pages.home')
            ->with('title', 'E-Learning System');
    }

    public function help()
    {
        return View::make('static_pages.help')
            ->with('title', 'Help');
    }

    public function about()
    {
        return View::make('static_pages.about')
            ->with('title', 'About');
    }

}
