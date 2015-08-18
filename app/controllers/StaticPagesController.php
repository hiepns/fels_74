<?php

class StaticPagesController extends \BaseController {

    public function home()
    {
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
