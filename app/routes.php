<?php

Route::get('/', 'StaticPagesController@home');
Route::get('/about', 'StaticPagesController@about');
Route::get('/signup', ['before' => 'guest', 'uses' => 'UsersController@create']);
Route::get('/login', ['before' => 'guest', 'uses' => 'SessionsController@create']);
Route::post('/login', ['before' => 'csrf', 'uses' => 'SessionsController@store']);
Route::get('/logout', ['before' => 'auth', 'uses' => 'SessionsController@destroy']);
Route::get('/word_list', ['before' => 'auth', 'uses' => 'WordListsController@index']);

Route::resource('users', 'UsersController');
Route::resource('relationships', 'RelationshipsController');
Route::resource('users.followings', 'FollowingsController');
Route::resource('users.followers', 'FollowersController');
