<?php

use Uninett\Helpers\AccessToken;

class ConferenceSessionsController extends \BaseController {

	private $client;

	function __construct(\Uninett\Api\Client $client)
	{
		$this->client = $client;
		parent::__construct();

		$this->sendVariablesToJavascript();
	}


	public function index($conference_id, $session_id)
	{
		$request = (new Uninett\Api\Request)->setMethod('GET');
		if($this->userIsAuthenticated())
			$request->setUrl("{$this->api_endpoint}/conferences/{$conference_id}/sessions/{$session_id}/authenticated")
				->setAccessTokenInHeader(AccessToken::get());
		else
			$request->setUrl("{$this->api_endpoint}/conferences/{$conference_id}/sessions/{$session_id}");

		//Assume user is not authenticated
		$status = -1;

		$response = $this->client->send($request);

		if ($this->userIsAuthenticated())
		{
			$request2 = (new Uninett\Api\Request)
				->setMethod('GET')
				->setUrl("{$this->api_endpoint}/conferences/{$conference_id}/sessions/{$session_id}/ratings/create")
				->setAccessTokenInHeader(AccessToken::get());

			$response2 = $this->client->send($request2);

			if(isset($response2['data'][0]['code']))
				$status = $response2['data'][0]['code'];
			else
				$status = -1;
		}


		return View::make('conference.events.show')->with([
			'data' =>  $response,
			'status' => $status
		]);
	}

	public function store()
	{
		Log::debug('Trying to store session in personal schedule');

		$conference_id = Session::get('conference_id');
		$requestedSessionId = Request::get('session_id');

		if(Request::ajax())
		{
			$request = (new Uninett\Api\Request)
				->setMethod('POST')
				->setUrl("{$this->api_endpoint}/conferences/{$conference_id}/schedule/personal")
				->setBody(['session_id' => $requestedSessionId])
				->setAccessTokenInHeader(AccessToken::get());

			$this->client->send($request);

			return View::make('conference.partials.buttons.button-schedule-remove', [ 'value' =>  $requestedSessionId ]);
		}
	}


	public function destroy()
	{
		Log::debug('Trying to destroy session in personal schedule');

		$conference_id = Session::get('conference_id');
		$requestedSessionId = Request::get('session_id');

		if(Request::ajax())
		{
			$request = (new Uninett\Api\Request)
				->setMethod('DELETE')
				->setUrl("{$this->api_endpoint}/conferences/{$conference_id}/schedule/personal/{$requestedSessionId}")
				->setAccessTokenInHeader(AccessToken::get());


			//TODO: Gjøre noe med respons?
			$response = $this->client->send($request);

			return View::Make('conference.partials.buttons.button-schedule-add',['value' =>  $requestedSessionId]);
		}
	}
}
