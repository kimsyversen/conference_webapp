<?php

Route::get('/', [ 'as' => 'home_path', 'uses' => 'HomeController@index' ]);

Route::get('/home', [ 'as' => 'main_path', 'uses' => 'HomeController@index' ]);


Route::get('register', [ 'as' => 'register_path', 'uses' => 'RegistrationController@create' ]);
Route::post('register', [ 'as' => 'register_path', 'uses' => 'RegistrationController@store' ]);

Route::get('login', ['as' => 'login_path', 'uses' => 'SessionsController@create']);
Route::post('login', ['as' => 'login_path', 'uses' => 'SessionsController@login']);

Route::get('logout', ['as' => 'logout_path', 'uses' => 'SessionsController@destroy']);


Route::get('users/profile', ['as' => 'profile_path', 'uses' => 'ProfileController@profile']);


Route::get('conferences', [ 'as' => 'conferences_path', 'uses' => 'ConferenceController@index' ]);


Route::group(['prefix' => 'conferences/{id}',  ], function() {
	Route::get('/', [ 'as' => 'conference_path', 'uses' => 'ConferenceController@getConferenceById' ]);

	Route::get('schedueles', [ 'as' => 'schedueles_path', 'uses' => 'ConferenceSchedueleController@index' ]);
});