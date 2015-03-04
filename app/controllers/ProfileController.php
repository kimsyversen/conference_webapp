<?php

use Uninett\Api\Request as ApiRequest;

class ProfileController extends BaseController {

	public function profile()
	{
		$request = new ApiRequest;

		$request->createTokenRequest(
			'GET',
			"{$this->api_endpoint}/users/me",
			[],
			[],
			[]
		);

		$response = $request->send()['data'];


		return View::make('users.profile')->with(compact('response'));
	}

}
