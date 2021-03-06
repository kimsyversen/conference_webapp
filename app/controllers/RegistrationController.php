<?php

class RegistrationController extends BaseController {

	private $client;

	function __construct(\Uninett\Api\Client $client)
	{
		$this->client = $client;
		parent::__construct();
	}

	public function create()
	{
		return View::make('conference.registration.create');
	}

	public function store()
	{
		$request = (new Uninett\Api\Request)
			->setMethod('POST')
			->setUrl("{$this->base_url}/register")
			->setBody(Request::all());

		$response = $this->client->send($request);

		if(isset($response['errors']))
			return Redirect::route('register_path')->with('errors',$response['errors']);

		return Redirect::route('login_path')->with([
				'data' => $response,
				'success' => Lang::get('alert.success.account-created')
		]);

	}
}