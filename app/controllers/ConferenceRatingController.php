<?php

use Uninett\Helpers\AccessToken;

class ConferenceRatingController extends \BaseController {

	private $client;

	function __construct(\Uninett\Api\Client $client)
	{

		$this->beforeFilter('authenticated');

		$this->client = $client;
		parent::__construct();
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$conference_id = Session::get('conference_id');

		if ($this->userIsAuthenticated()) {

			$data = [
				'conference_id' => Session::get('conference_id'),
			];

			Request::merge($data);

			$requestData = Request::except('_token');

			$request = (new Uninett\Api\Request)
				->setMethod('POST')
				->setUrl("{$this->api_endpoint}/conferences/{$conference_id}/ratings")
				->setBody($requestData)
				->setAccessTokenInHeader(AccessToken::get());

			$response = $this->client->send($request);

			if(isset($response['data'])) {
				return Redirect::route('conference_path', $conference_id);
			}
		}
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$conference_id = Session::get('conference_id');

		if ($this->userIsAuthenticated())
		{

			$data = [
				'conference_id' => Session::get('conference_id'),
			];

			Request::merge($data);

			$requestData = Request::except('_token');

			$request = (new Uninett\Api\Request)
				->setMethod('GET')
				->setUrl("{$this->api_endpoint}/conferences/{$conference_id}/ratings/create")
				->setBody($requestData)
				->setAccessTokenInHeader(AccessToken::get());

			$response = $this->client->send($request);

			if (isset($response['data']))
			{
				return View::make('conference.partials.rating.create')->with(['status' => $response['data'][0]['code']]);
			}
		}
	}


}