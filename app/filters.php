<?php

/*Route::filter('cache.fetch', 'Uninett\Filters\CacheFilter@fetch');
Route::filter('cache.put', 'Uninett\Filters\CacheFilter@put');*/

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	\Uninett\Helpers\AccessToken::validate();

	if(Cookie::has('language')) {
		App::setLocale(Cookie::get('language'), Config::get('app.locale'));
	}

	if(!Cookie::has('first_visit')) {
		Cookie::queue('first_visit', 'no', 2628000);
	}
});


App::after(function($request, $response)
{

});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if (Auth::guest())
	{
		if (Request::ajax())
		{
			return Response::make('Unauthorized', 401);
		}
		else
		{
			return Redirect::guest('login');
		}
	}
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

Route::filter('authenticated', function()
{
	if (!Session::has('access_token'))
		return Redirect::route('login_path')->with('messages', ['You must be authenticated to do access that page']);
});


Route::filter('redirectIfAuthenticated', function()
{
	if (Session::has('access_token'))
	{
		if(Session::has('conference_id'))
			return Redirect::route('conference_path', ['conference_id' => Session::get('conference_id')]);

		return Redirect::route('conferences_path');
	}
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});
