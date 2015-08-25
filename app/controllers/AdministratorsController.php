<?php

class AdministratorsController extends BaseController {

    public function index()
    {
        return View::make('admin.index');
    }
}
