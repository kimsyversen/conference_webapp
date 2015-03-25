<?php



Breadcrumbs::register('conferences', function($breadcrumbs) {
	$breadcrumbs->push('Conferences', route('conferences_path'));
});


Breadcrumbs::register('registration', function($breadcrumbs) {
	$breadcrumbs->parent('conferences');
	$breadcrumbs->push('Register account', route('registration_path'));
});

Breadcrumbs::register('login', function($breadcrumbs) {
	$breadcrumbs->parent('conferences');
	$breadcrumbs->push('Sign in', route('login_path'));
});


Breadcrumbs::register('about_creators', function($breadcrumbs) {
	$breadcrumbs->parent('conferences');
	$breadcrumbs->push('About the application', route('about_creators_path'));
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

Breadcrumbs::register('maps', function($breadcrumbs) {
	$breadcrumbs->parent('conference');
	$breadcrumbs->push("Maps", route('maps_path'));

});

Breadcrumbs::register('newsfeed', function($breadcrumbs) {
	$breadcrumbs->parent('conference');
	$breadcrumbs->push("Newsfeed", route('newsfeed_path'));

});

Breadcrumbs::register('chats', function($breadcrumbs) {
	$conference_id = Session::get('conference_id');

	$breadcrumbs->parent('conference');
	$breadcrumbs->push("Chats", route('chats_path', ['conference_id' => $conference_id]));

});

Breadcrumbs::register('chat', function($breadcrumbs) {
	$conference_id = Session::get('conference_id');

	$breadcrumbs->parent('chats');
	$breadcrumbs->push("Chat", route('chat_path', ['conference_id' => $conference_id]));

});


Breadcrumbs::register('personal_schedule', function($breadcrumbs) {
	$breadcrumbs->parent('conference');
	$breadcrumbs->push("My schedule", route('personal_schedule_path'));

});



Breadcrumbs::register('profile', function($breadcrumbs) {
	$breadcrumbs->parent('conferences');
	$breadcrumbs->push("Your profile", route('profile_path'));

});

Breadcrumbs::register('schedule', function($breadcrumbs) {
	$breadcrumbs->parent('conference');
	if(Session::has('conference_id'))
		$breadcrumbs->push("Conference schedule", route('schedule_path', ['conference_id' => Session::get('conference_id')]));
	else
		$breadcrumbs->push("Conference schedule", route('schedule_path'));

	//TODO: elsen over.. er den noe vits?
});


Breadcrumbs::register('session', function($breadcrumbs) {
	$breadcrumbs->parent('schedule');

	if(Session::has('session_id'))
	{
		$conference_id = Session::get('conference_id');
		$session_id = Session::get('session_id');

		$breadcrumbs->push("Event", route('session_path', ['session_id' => $session_id, 'conference_id' => $conference_id]));
	}
	else
		$breadcrumbs->push("Event", route('conference_path'));

});


Breadcrumbs::register('rating', function($breadcrumbs) {
	$breadcrumbs->parent('session');
	$breadcrumbs->push("Rate session", route('rating_path'));

});