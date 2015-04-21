<?php

use Uninett\Helpers\AccessToken;

class ConferencePersonalScheduleController extends \BaseController {

	private $client;

	function __construct(\Uninett\Api\Client $client)
	{
		$this->client = $client;
		parent::__construct();
	}

	public function index($conference_id)
	{
		if($this->userIsAuthenticated())
		{
			$request = (new Uninett\Api\Request)
				->setMethod('GET')
				->setUrl("{$this->api_endpoint}/conferences/{$conference_id}/schedule/personal")
				->setAccessTokenInHeader(AccessToken::get());

			$response = $this->client->send($request);

			$this->sendVariablesToJavascript();

			return View::make('conference.schedule.personal.index')->with(['data' => $response, 'default_view' => 'traditional']);
		}
	}
}
