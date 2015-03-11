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
	/*	JavaScript::put([
			'conference_id' => Session::get('conference_id'),
			'session_id' => Session::get('session_id'),
		]);*/

		return View::make('conference.registration.create');
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
			return Redirect::back()->with('errors',$response['errors']);

		return Redirect::route('login_path')->with(
			[
				'data' => $response,
				'messages' => ['Account was successfully created. Check your email to verify your account']
			]);

	}
}