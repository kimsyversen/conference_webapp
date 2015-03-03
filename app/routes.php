<?php

Route::get('/', function()  { return View::make('hello'); });

Route::get('/home', [ 'as' => 'main_path', 'uses' => 'HomeController@index' ]);


Route::get('register', [ 'as' => 'register_path', 'uses' => 'RegistrationController@create' ]);
Route::post('register', [ 'as' => 'register_path', 'uses' => 'RegistrationController@store' ]);

Route::get('login', ['as' => 'login_path', 'uses' => 'SessionsController@create'])->before('authenticated');
Route::post('login', ['as' => 'login_path', 'uses' => 'SessionsController@login']);

Route::get('logout', ['as' => 'logout_path', 'uses' => 'SessionsController@destroy']);


Route::get('users/profile', ['as' => 'profile_path', 'uses' => 'ProfileController@profile'])->before('not_authenticated');
