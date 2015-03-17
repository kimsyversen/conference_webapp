<?php

use Uninett\Api\Client as ApiRequest;

class ProfileController extends BaseController {

	private $client;

	function __construct(\Uninett\Api\Client $client)
	{
		$this->client = $client;
		parent::__construct();
	}

	public function profile()
	{
		$request = (new Uninett\Api\Request)
			->setMethod('GET')
			->setUrl("{$this->api_endpoint}/users/me")
			->setAccessTokenInHeaders();

		$response = $this->client->send($request);
		return View::make('conference.users.profile.index')->with(compact('response'));
	}

}
