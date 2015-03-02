<?php

class RegistrationController extends BaseController {


	public function create()
	{
		return View::Make('registration.create');
	}


	public function store()
	{
		$request = new \Uninett\Api\Request();

/*		$secret = [
			'client_id' => 1,
			'client_secret' => 'asdf',
			'grant_type' => 'password'"{$this->api_base_url}/register",
		];*/

		$request->createRequest(
			'POST',
			"{$this->api_base_url}/register",
			[],
			Request::all(),
			[]
		);

		$response = $request->send();

		if(isset($response['error']))
			return Redirect::back()->with(compact('response'));

		$messages = [
			'Account was successfully created. Check your email to verify your account '
		];

		return Redirect::route('login_path')->with(compact('response', 'messages'));


	}



}