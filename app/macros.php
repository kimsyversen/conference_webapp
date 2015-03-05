<?php

HTML::macro('isUrlActive', function ($route) {
	return strpos(Request::url(), route($route)) !== false ? 'active' : '';
});