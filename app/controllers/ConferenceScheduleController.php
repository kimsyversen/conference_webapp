<?php

use Uninett\Helpers\AccessToken;

class ConferenceScheduleController extends \BaseController {

	private $client;

	function __construct(\Uninett\Api\Client $client)
	{
		$this->client = $client;
		parent::__construct();
	}

	public function index($conference_id)
	{
		$request = (new Uninett\Api\Request)->setMethod('GET');

		if($this->userIsAuthenticated())
			$request->setUrl("{$this->api_endpoint}/conferences/{$conference_id}/schedule/authenticated")
				->setAccessTokenInHeader(AccessToken::get());
		else
			$request->setUrl("{$this->api_endpoint}/conferences/{$conference_id}/schedule");

		$response = $this->client->send($request);

		return View::make('conference.schedule.conference.index')->with(['data' => $response]);
	}
}
