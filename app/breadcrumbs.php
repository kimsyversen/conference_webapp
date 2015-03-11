<?php

Breadcrumbs::register('home', function($breadcrumbs) {
	$breadcrumbs->push('Home', route('home_path'));
});

Breadcrumbs::register('conferences', function($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('Conferences', route('conferences_path'));
});


Breadcrumbs::register('registration', function($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('Register account', route('registration_path'));
});

Breadcrumbs::register('login', function($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('Sign in', route('login_path'));
});


Breadcrumbs::register('conference', function($breadcrumbs) {
	$breadcrumbs->parent('conferences');

	if(Session::has('conference_id'))
	{
		$conference_id = Session::get('conference_id');
		$breadcrumbs->push("Conference {$conference_id}", route('conference_path', ['conference_id' => $conference_id]));
	}
	else
		$breadcrumbs->push("Conference", route('conference_path'));
});


Breadcrumbs::register('profile', function($breadcrumbs) {
	$breadcrumbs->parent('conference');
	$breadcrumbs->push("Your profile", route('profile_path'));

});

Breadcrumbs::register('schedule', function($breadcrumbs) {
	$breadcrumbs->parent('conference');
	if(Session::has('conference_id'))
	{
		$conference_id = Session::get('conference_id');

		$breadcrumbs->push("Schedule", route('schedule_path', ['conference_id' => $conference_id]));
	}
	else
		$breadcrumbs->push("Schedule", route('schedule_path'));
});


Breadcrumbs::register('session', function($breadcrumbs) {
	$breadcrumbs->parent('schedule');

	if(Session::has('session_id'))
	{
		$conference_id = Session::get('conference_id');
		$session_id = Session::get('session_id');

		$breadcrumbs->push("Session {$session_id}", route('session_path', ['session_id' => $session_id, 'conference_id' => $conference_id]));
	}
	else
		$breadcrumbs->push("Session", route('conference_path'));

});


Breadcrumbs::register('rating', function($breadcrumbs) {
	$breadcrumbs->parent('session');
	$breadcrumbs->push("Rating", route('rating_path'));

});