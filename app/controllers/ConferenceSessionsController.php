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

		return View::make('conference.sessions.index')->with('data', $response);
	}

	public function store()
	{
		return Request::all();
	}
}
