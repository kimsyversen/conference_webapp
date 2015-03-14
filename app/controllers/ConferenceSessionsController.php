<?php

class ConferenceSessionsController extends \BaseController {

	private $request;

	function __construct(\Uninett\Api\Request $request)
	{
		$this->request = $request;
		parent::__construct();
	}


	public function index($conference_id, $session_id)
	{
		$this->request->createRequest('GET', "{$this->api_endpoint}/conferences/{$conference_id}/sessions/{$session_id}");

		//Assume user is not authenticated
		$status = -1;

		$response = $this->request->send();

		//If user is authenticated
		if ($this->userIsAuthenticated())
		{
			$this->request->createRequest('GET', "{$this->api_endpoint}/conferences/{$conference_id}/sessions/{$session_id}/ratings/create");

			$response2 = $this->request->send();

			if(isset($response2['data'][0]['code']))
				$status = $response2['data'][0]['code'];
			else
				$status = -1;

		}

		return View::make('conference.sessions.index')->with(['data' =>  $response, 'status' => $status]);
	}

	public function store()
	{
		return Request::all();
	}
}
