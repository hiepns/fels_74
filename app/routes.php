<?php

Route::get('/', 'StaticPagesController@home');
Route::get('/about', 'StaticPagesController@about');
Route::get('/signup', ['before' => 'guest', 'uses' => 'UsersController@create']);
Route::get('/login', ['before' => 'guest', 'uses' => 'SessionsController@create']);
Route::post('/login', ['before' => 'csrf', 'uses' => 'SessionsController@store']);
Route::get('/logout', ['before' => 'auth', 'uses' => 'SessionsController@destroy']);

Route::resource('users', 'UsersController');
