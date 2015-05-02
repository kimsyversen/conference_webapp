<?php
Breadcrumbs::register('conferences', function($breadcrumbs) {
	$breadcrumbs->push(Lang::get('menu.home')  , route('conferences_path'));
});


Breadcrumbs::register('registration', function($breadcrumbs) {
	$breadcrumbs->parent('conferences');
	$breadcrumbs->push(Lang::get('menu.register'), route('registration_path'));
});

Breadcrumbs::register('login', function($breadcrumbs) {
	$breadcrumbs->parent('conferences');
	$breadcrumbs->push(Lang::get('menu.login'), route('login_path'));
});


Breadcrumbs::register('about', function($breadcrumbs) {
	$breadcrumbs->parent('conferences');
	$breadcrumbs->push(Lang::get('menu.about_application'), route('about_path'));
});

Breadcrumbs::register('guidelines', function($breadcrumbs) {
	$breadcrumbs->parent('conferences');
	$breadcrumbs->push(Lang::get('menu.guidelines'), route('about_path'));
});


Breadcrumbs::register('conference', function($breadcrumbs) {
	$breadcrumbs->parent('conferences');

	if(Session::has('conference_id'))
	{
		$conference_id = Session::get('conference_id');
		$breadcrumbs->push(Lang::get('menu.conference') .  " {$conference_id}", route('conference_path', ['conference_id' => $conference_id]));
	}
	else
		$breadcrumbs->push(Lang::get('menu.conference'), route('conference_path'));
});

Breadcrumbs::register('conference_rating', function($breadcrumbs) {
	$breadcrumbs->parent('conference');
	$breadcrumbs->push(Lang::get('menu.conference_rating'), route('conference_rating_path'));

});


Breadcrumbs::register('maps', function($breadcrumbs) {
	$breadcrumbs->parent('conference');
	$breadcrumbs->push(Lang::get('menu.maps'), route('maps_path'));

});

Breadcrumbs::register('newsfeed', function($breadcrumbs) {
	$breadcrumbs->parent('conference');
	$breadcrumbs->push(Lang::get('menu.newsfeed'), route('newsfeed_path'));

});

Breadcrumbs::register('chats', function($breadcrumbs) {
	$conference_id = Session::get('conference_id');

	$breadcrumbs->parent('conference');
	$breadcrumbs->push(Lang::get('menu.messages'), route('chats_path', ['conference_id' => $conference_id]));

});

Breadcrumbs::register('chat', function($breadcrumbs) {
	$conference_id = Session::get('conference_id');

	$breadcrumbs->parent('chats');
	$breadcrumbs->push(Lang::get('menu.messages'), route('chat_path', ['conference_id' => $conference_id]));

});


Breadcrumbs::register('personal_schedule', function($breadcrumbs) {
	$breadcrumbs->parent('conference');
	$breadcrumbs->push(Lang::get('menu.personal_schedule'), route('personal_schedule_path'));

});




Breadcrumbs::register('schedule', function($breadcrumbs) {
	$breadcrumbs->parent('conference');
	if(Session::has('conference_id'))
		$breadcrumbs->push(Lang::get('menu.schedule'), route('schedule_path', ['conference_id' => Session::get('conference_id')]));
	else
		$breadcrumbs->push(Lang::get('menu.schedule'), route('schedule_path'));
});


Breadcrumbs::register('session', function($breadcrumbs) {
	$breadcrumbs->parent('schedule');

	if(Session::has('session_id'))
	{
		$conference_id = Session::get('conference_id');
		$session_id = Session::get('session_id');
		$breadcrumbs->push(Lang::get('menu.event'), route('session_path', ['session_id' => $session_id, 'conference_id' => $conference_id]));
	}
	else
		$breadcrumbs->push(Lang::get('menu.event'), route('conference_path'));
});


Breadcrumbs::register('rating', function($breadcrumbs) {
	$breadcrumbs->parent('session');
	$breadcrumbs->push(Lang::get('menu.rating'), route('rating_path'));

});