<?php

Route::get('/', 'StaticPagesController@home');
Route::get('/about', 'StaticPagesController@about');
Route::get('/signup', 'UsersController@create');

Route::resource('users', 'UsersController');
