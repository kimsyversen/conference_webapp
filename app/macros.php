<?php
//Snippet from http://laravel-tricks.com/tricks/active-states-based-on-route-names
HTML::macro('activeState', function ($route) {

	return strpos(Request::url(), route($route)) !== false ? 'active' : '';
});
