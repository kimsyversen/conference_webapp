<?php
return [
	/**
	 * Set the correct information about the API here.
	 * This will be used when users are registering accounts
	 */
	'oauth_info' => [
		'client_id' => 1,
		'client_secret' => 'asdf',
		'grant_type' => 'password'
	],

	'api_base_uri' => 'https://shadowcat.uninett.no',
	'api_endpoint_uri' => 'https://shadowcat.uninett.no/api/v1',
	'api_accesstoken_endpoint_url' => 'https://shadowcat.uninett.no/oauth/access_token',

	'base_url' => 'https://turbo.uninett.no',
	
	'cache_time' => 60,
];


