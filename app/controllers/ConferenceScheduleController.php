<?php

class ConferenceScheduleController extends \BaseController {

	private $request;

	function __construct(\Uninett\Api\Request $request)
	{
		$this->request = $request;
		parent::__construct();
	}

	public function index($conference_id)
	{
		if($this->userIsAuthenticated())
			$this->request->createRequest('GET', "{$this->api_endpoint}/conferences/{$conference_id}/schedule/authenticated");
		else
			$this->request->createRequest('GET', "{$this->api_endpoint}/conferences/{$conference_id}/schedule");


		$response = $this->request->send();

		return View::make('conference.schedule.conference.index')->with(['data' => $response]);
	}



}
