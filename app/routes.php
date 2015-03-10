<?php
Route::get('/', [ 'as' => 'home_path', 'uses' => 'HomeController@index' ]);
Route::get('/home', [ 'as' => 'home_path', 'uses' => 'HomeController@index' ]);

Route::get('register', [ 'as' => 'registration_path', 'uses' => 'RegistrationController@create' ]);
Route::post('register', [ 'as' => 'registration_path', 'uses' => 'RegistrationController@store' ]);
Route::get('login', ['as' => 'login_path', 'uses' => 'SessionsController@create']);
Route::post('login', ['as' => 'login_path', 'uses' => 'SessionsController@login']);
Route::get('logout', ['as' => 'logout_path', 'uses' => 'SessionsController@destroy']);




Route::get('conferences', [ 'as' => 'conferences_path', 'uses' => 'ConferenceController@index' ]);
Route::get('conferences/{id}', [ 'as' => 'conference_path', 'uses' => 'ConferenceController@getConferenceById' ]);
Route::get('conferences/{id}/users/profile', ['as' => 'profile_path', 'uses' => 'ProfileController@profile']);
Route::get('conferences/{id}/schedule', [ 'as' => 'schedule_path', 'uses' => 'ConferenceScheduleController@index' ]);
Route::get('conferences/{id}/sessions/{session_id}', [ 'as' => 'session_path', 'uses' => 'ConferenceSessionsController@index' ]);