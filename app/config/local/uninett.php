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

	'api_base_uri' => 'http://localhost:8000',
	'api_endpoint_uri' => 'http://localhost:8000/api/v1',
	'api_accesstoken_endpoint_url' => 'http://localhost:8000/oauth/access_token',
	'base_url' => 'http://localhost:8001',
	'cache_time' => 60,
];
