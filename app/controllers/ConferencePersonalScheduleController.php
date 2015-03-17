<?php

class ConferencePersonalScheduleController extends \BaseController {

	private $client;

	function __construct(\Uninett\Api\Client $client)
	{
		$this->client = $client;
		parent::__construct();
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index($conference_id)
	{
		if($this->userIsAuthenticated())
		{
			$request = (new Uninett\Api\Request)
				->setMethod('GET')
				->setUrl("{$this->api_endpoint}/conferences/{$conference_id}/schedule/personal")
				->setAccessTokenInHeaders(Session::get('access_token')['access_token']);

			$response = $this->client->send($request);

			return View::make('conference.schedule.personal.index')->with(['data' => $response]);
		}
	}
}
