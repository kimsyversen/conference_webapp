<?php

class RegistrationController extends BaseController {


	function __construct()
	{
		$this->base_url = "http://localhost:8000";

		parent::__construct();

	}

	public function create()
	{
		return View::Make('registration.create');
	}


	public function store()
	{
		$request = new \Uninett\Api\Request();
		$request->createRequest(
			'POST',
			"http://localhost:8000/register",
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