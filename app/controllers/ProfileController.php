<?php

use Uninett\Api\Request as ApiRequest;

class ProfileController extends BaseController {

	public function profile()
	{
		$request = new ApiRequest;

		$request->createRequest(
			'GET',
			"http://localhost:8000/api/v1/users/me",
			['access_token' => 'fx7SigN4CPOgoSoErKy4ixfwR3P6tXo3in7abIGz'],
			['access_token' => 'fx7SigN4CPOgoSoErKy4ixfwR3P6tXo3in7abIGz'],
			['access_token' => 'fx7SigN4CPOgoSoErKy4ixfwR3P6tXo3in7abIGz']
		);


		$response = $request->send();

		dd($response);

		return View::make('users.profile')->with(compact('response'));
	}

}
