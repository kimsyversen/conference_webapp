<?php
//TODO Refactor
Route::bind('conference_id', function($value, $route)
{
	Session::put('conference_id', $value);
/*	JavaScript::put([
		'conferenceId' => Session::get('conference_id'),

	]);*/
	return $value;
});

Route::bind('session_id', function($value, $route)
{
/*	JavaScript::put([

		'sessionId' => Session::get('session_id'),
	]);*/
	Session::put('session_id', $value);

	return $value;
});

Route::get('/', [ 'as' => 'home_path', 'uses' => 'HomeController@index' ]);
Route::get('/home', [ 'as' => 'home_path', 'uses' => 'HomeController@index' ]);

Route::get('register', [ 'as' => 'registration_path', 'uses' => 'RegistrationController@create' ]);
Route::post('register', [ 'as' => 'registration_path', 'uses' => 'RegistrationController@store' ]);
Route::get('login', ['as' => 'login_path', 'uses' => 'SessionsController@create']);
Route::post('login', ['as' => 'login_path', 'uses' => 'SessionsController@login']);
Route::get('logout', ['as' => 'logout_path', 'uses' => 'SessionsController@destroy']);


Route::get('conferences', [ 'as' => 'conferences_path', 'uses' => 'ConferenceController@index' ]);
Route::get('conferences/{conference_id}', [ 'as' => 'conference_path', 'uses' => 'ConferenceController@getConferenceById' ]);
Route::get('conferences/{conference_id}/users/profile', ['as' => 'profile_path', 'uses' => 'ProfileController@profile']);
Route::get('conferences/{conference_id}/schedule', [ 'as' => 'schedule_path', 'uses' => 'ConferenceScheduleController@index' ]);
Route::get('conferences/{conference_id}/schedule/personal', [ 'as' => 'personal_schedule_path', 'uses' => 'ConferencePersonalScheduleController@index' ]);

Route::get('conferences/{conference_id}/sessions/{session_id}', [ 'as' => 'session_path', 'uses' => 'ConferenceSessionsController@index' ]);
Route::post('conferences/{conference_id}/sessions/{session_id}', [ 'as' => 'session_path', 'uses' => 'ConferenceSessionsController@store' ]);





/**
 * AJAX Routes
 */

Route::get('ajax/user_get_rating', [ 'as' => 'get', 'uses' => 'RatingsController@show' ]);
Route::post('ajax/user_get_rating', [ 'as' => 'post', 'uses' => 'RatingsController@store' ]);

