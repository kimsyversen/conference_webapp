<?php

use Uninett\Api\Request as ApiRequest;

class ProfileController extends BaseController {

	private $request;

	function __construct(\Uninett\Api\Request $request)
	{
		$this->request = $request;
		parent::__construct();
	}

	public function profile()
	{
		$this->request->createTokenRequest(
			'GET',
			"{$this->api_endpoint}/users/me",
			[],
			[],
			[]
		);

		$response = $this->request->send();
		return View::make('users.profile.index')->with(compact('response'));
	}

}
