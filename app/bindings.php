<?php
Route::bind('conference_id', function($value, $route)
{
	Session::put('conference_id', $value);
	return $value;
});

Route::bind('session_id', function($value, $route)
{
	Session::put('session_id', $value);
	return $value;
});