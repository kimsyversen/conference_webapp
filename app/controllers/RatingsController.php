<?php

use Uninett\Helpers\AccessToken;

class RatingsController extends BaseController {

	private $client;

	function __construct(\Uninett\Api\Client $client)
	{
		$this->client = $client;
		parent::__construct();
	}

	public function show()
	{
		$conference_id = Session::get('conference_id');
		$session_id = Session::get('session_id');

		if(Request::ajax()) {
			if ($this->userIsAuthenticated()) {
				$request = (new Uninett\Api\Request)
					->setMethod('GET')
					->setUrl("{$this->api_endpoint}/conferences/{$conference_id}/sessions/{$session_id}/ratings/create");

				$response = $this->client->send($request);

				if (isset($response['data'][0]['code']))
					return View::Make('conference.sessions.partials.rating', ['status' => $response['data'][0]['code']]);
			}
		}
		else {
			return View::Make('conference.sessions.partials.rating', ['status' => -1]);
		}

		return Redirect::route('conferences_path')->with([
			'errors' =>  ['Something went wrong when trying to display the rating form.']
		]);
	}

	/**
	 * @return array
	 */
	public function store()
	{
		$conference_id = Session::get('conference_id');
		$session_id =  Session::get('session_id');

		//This method does not account for posting rating for the same session twice. That should be handled by the get method.

		if (Request::ajax()) {
			if ($this->userIsAuthenticated()) {

				$data = [
					'conference_id' => Session::get('conference_id'),
					'session_id' => Session::get('session_id')
				];

				Request::merge($data);

				$requestData = Request::except('_token');

				$request = (new Uninett\Api\Request)
					->setMethod('POST')
					->setUrl("{$this->api_endpoint}/conferences/{$conference_id}/sessions/{$session_id}/ratings")
					->setBody($requestData)
					->setAccessTokenInHeader(AccessToken::get());

				$response = $this->client->send($request);

				if(isset($response['data'])) {
					return View::Make('conference.events.partials.rating.status.4');
				}

				return View::Make('conference.events.partials.rating.status.5');
			}
		}
		Log::error('Someome tried to make a wrong call in RatingsController@store');
			return Redirect::back()->with(['error' =>  Lang::get('error.not-specified')]);

	}
}
