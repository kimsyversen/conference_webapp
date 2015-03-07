<?php

class RegistrationController extends BaseController {

	private $request;

	function __construct(\Uninett\Api\Request $request)
	{
		$this->request = $request;
		parent::__construct();
	}

	public function create()
	{
		return View::make('registration.create');
	}

	public function store()
	{
		$this->request->createRequest(
			'POST',
			"http://localhost:8000/register",
			[],
			Request::all(),
			[]
		);

		$response = $this->request->send();

		if(isset($response['errors']))
			return Redirect::back()->with($response);

		return Redirect::route('login_path')->with([
			'messages' => ['Account was successfully created. Check your email to verify your account'],
			'data' => $response
		]);
	}
}