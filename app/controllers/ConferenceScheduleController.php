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
		$this->request->createRequest(
			'GET',
			"{$this->api_endpoint}/conferences/{$conference_id}/schedule",
			[],
			[],
			[]
		);

		$response = $this->request->send();


		return View::make('conference.schedule.index')->with(['data' => $response]);
	}
}
