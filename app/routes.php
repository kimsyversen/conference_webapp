<?php
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::get('secret', ['as' => 'secret_path', 'uses' => 'AboutCreatorsController@secret' ]);

Route::get('register', [ 'as' => 'register_path', 'uses' => 'RegistrationController@create' ])->before('cache.fetch')->after('cache.put');
Route::get('registermodal', [ 'as' => 'registration_modal_path', 'uses' => 'RegistrationController@createModal' ])->before('cache.fetch')->after('cache.put');
Route::post('register', [ 'as' => 'registration_path', 'uses' => 'RegistrationController@store' ]);
Route::get('login', ['as' => 'login_path', 'uses' => 'SessionsController@create'])->before('redirectIfAuthenticated')->before('cache.fetch')->after('cache.put');
Route::get('loginmodal', ['as' => 'login_modal_path', 'uses' => 'SessionsController@createModal'])->before('cache.fetch')->after('cache.put');
Route::post('login', ['as' => 'login_path', 'uses' => 'SessionsController@login']);
Route::get('logout', ['as' => 'logout_path', 'uses' => 'SessionsController@destroy']);

Route::get('survey', ['as' => 'survey_path', 'uses' => 'SurveyController@index']);
/*Route::get('profile', ['as' => 'profile_path', 'uses' => 'ProfileController@profile']);*/

Route::get('/features', ['as' => 'featurette_path', 'uses' => 'FeaturetteController@create' ]); //->before('cache.fetch')->after('cache.put');
Route::get('/about', ['as' => 'about_path', 'uses' => 'AboutCreatorsController@index' ]); //->before('cache.fetch')->after('cache.put');
Route::get('/guidelines', ['as' => 'guideline_path', 'uses' => 'GuidelinesController@index' ]); //->before('cache.fetch')->after('cache.put');

//TODO: Since we have no conference start page, set the conference schedule as the start page
//Route::get('conferences/{conference_id}', [ 'as' => 'conference_path', 'uses' => 'ConferenceController@getConferenceById' ]);

Route::get('/', ['as' => 'home_path', 'uses' => 'ConferenceController@index' ]);
Route::get('conferences', [ 'as' => 'conferences_path', 'uses' => 'ConferenceController@index' ]);
Route::get('conferences/{conference_id}', [ 'as' => 'conference_path', 'uses' => 'ConferenceScheduleController@index' ]);
Route::get('conferences/{conference_id}/rate', [ 'as' => 'conference_rating_path', 'uses' => 'ConferenceRatingController@create' ]);
Route::post('conferences/{conference_id}/rate', [ 'as' => 'conference_rating_path', 'uses' => 'ConferenceRatingController@store' ]);

Route::get('conferences/{conference_id}/maps', [ 'as' => 'maps_path', 'uses' => 'ConferenceMapsController@index' ]);
/*Route::get('conferences/{conference_id}/chats', [ 'as' => 'chats_path', 'uses' => 'ConferenceChatsController@index' ]);
Route::get('conferences/{conference_id}/chats/{chat_id}', [ 'as' => 'chat_path', 'uses' => 'ConferenceChatsController@show' ]);*/
Route::get('conferences/{conference_id}/newsfeed', [ 'as' => 'newsfeed_path', 'uses' => 'ConferenceNewsFeedController@index' ]);
Route::get('conferences/{conference_id}/schedule', [ 'as' => 'schedule_path', 'uses' => 'ConferenceScheduleController@index' ]);
Route::get('conferences/{conference_id}/schedule/personal', [ 'as' => 'personal_schedule_path', 'uses' => 'ConferencePersonalScheduleController@index' ]);
Route::get('conferences/{conference_id}/sessions/{session_id}', [ 'as' => 'session_path', 'uses' => 'ConferenceSessionsController@index' ]);
Route::post('conferences/{conference_id}/sessions/{session_id}', [ 'as' => 'session_path', 'uses' => 'ConferenceSessionsController@store' ]); //Ajax store in personal agenda
Route::delete('conferences/{conference_id}/sessions/{session_id}', [ 'as' => 'session_delete_path', 'uses' => 'ConferenceSessionsController@destroy' ]); //Ajax destroy in personal agenda


/* AJAX Routes */
Route::post('ajax/change_language', ['as' => 'ajax.user.language.change', 'uses' => 'LocalizationController@store']);

//



Route::get('ajax/user_get_rating', [ 'as' => 'ajax.user.get.rating', 'uses' => 'RatingsController@show' ]);
Route::post('ajax/user_get_rating', [ 'as' => 'ajax.user.post.rating', 'uses' => 'RatingsController@store' ]);
Route::post('ajax/change_view', ['as' => 'ajax.user.change.view', 'uses' => 'ConferenceScheduleViewController@store']);

/* loader.io */
Route::get('loaderio-aef6c70fb68412153005721ed69b906e.txt', function() {
	return File::get(storage_path() . "/loaderio-aef6c70fb68412153005721ed69b906e.txt");
});


/* ADMIN */
//Route::get('/admin', ['as' => 'home_path', 'uses' => 'Uninett\Admin\AdminController@index' ]);

