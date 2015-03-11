<?php

class ConferenceSessionsController extends \BaseController {

	private $request;

	function __construct(\Uninett\Api\Request $request)
	{
		$this->request = $request;
		parent::__construct();
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($conference_id, $session_id)
	{
		$this->request->createRequest('GET', "{$this->api_endpoint}/conferences/{$conference_id}/sessions/{$session_id}");
		$response = $this->request->send();




		if(Session::has('access_token'))
		{
			$this->request->createTokenRequest('GET', "{$this->api_endpoint}/conferences/{$conference_id}/sessions/{$session_id}/ratings/create");
			$rateResponse = $this->request->send();

			if(isset($rateResponse['data']['rateable']))
				return View::make('conference.sessions.index')->with('data', array_merge($response, ['rateable' => true]));
		}

		return View::make('conference.sessions.index')->with('data', array_merge($response, ['rateable' => false]));
	}

	public function store()
	{
		return Request::all();
	}

}
