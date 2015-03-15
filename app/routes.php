<?php
Route::get('register', [ 'as' => 'registration_path', 'uses' => 'RegistrationController@create' ]);
Route::post('register', [ 'as' => 'registration_path', 'uses' => 'RegistrationController@store' ]);
Route::get('login', ['as' => 'login_path', 'uses' => 'SessionsController@create']);
Route::post('login', ['as' => 'login_path', 'uses' => 'SessionsController@login']);
Route::get('logout', ['as' => 'logout_path', 'uses' => 'SessionsController@destroy']);

Route::get('profile', ['as' => 'profile_path', 'uses' => 'ProfileController@profile']);

Route::get('/', ['uses' => 'ConferenceController@index' ]);
Route::get('conferences', [ 'as' => 'conferences_path', 'uses' => 'ConferenceController@index' ]);

//TODO: Since we have no conference start page, set the conference schedule as the start page
//Route::get('conferences/{conference_id}', [ 'as' => 'conference_path', 'uses' => 'ConferenceController@getConferenceById' ]);


Route::get('conferences/{conference_id}', [ 'as' => 'conference_path', 'uses' => 'ConferenceScheduleController@index' ]);
Route::get('conferences/{conference_id}/schedule', [ 'as' => 'schedule_path', 'uses' => 'ConferenceScheduleController@index' ]);
Route::get('conferences/{conference_id}/schedule/personal', [ 'as' => 'personal_schedule_path', 'uses' => 'ConferencePersonalScheduleController@index' ]);
Route::get('conferences/{conference_id}/sessions/{session_id}', [ 'as' => 'session_path', 'uses' => 'ConferenceSessionsController@index' ]);
Route::post('conferences/{conference_id}/sessions/{session_id}', [ 'as' => 'session_path', 'uses' => 'ConferenceSessionsController@store' ]); //Ajax store in personal agenda
Route::delete('conferences/{conference_id}/sessions/{session_id}', [ 'as' => 'session_delete_path', 'uses' => 'ConferenceSessionsController@destroy' ]); //Ajax destroy in personal agenda





/**
 * AJAX Routes
 */
//Fjerne get?
Route::get('ajax/user_get_rating', [ 'as' => 'ajax.user.get.rating', 'uses' => 'RatingsController@show' ]);
Route::post('ajax/user_get_rating', [ 'as' => 'ajax.user.post.rating', 'uses' => 'RatingsController@store' ]);

