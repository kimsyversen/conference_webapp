<?php

class ConferenceController extends \BaseController {

	private $client;

	function __construct(\Uninett\Api\Client $client)
	{
		parent::__construct();

		$this->client = $client;
	}


	public function index()
	{
		//If we want to utilize caching
	/*	if(Cache::has('conferences'))
			return View::make('conference.index')->with(Cache::get('conferences'));*/

		$request = (new Uninett\Api\Request)->setMethod('GET')->setUrl("{$this->api_endpoint}/conferences");

		$response = $this->client->send($request);

		/*Cache::put('conferences', $response, 60);*/

		return View::make('conference.index')->with($response);
	}

	public function getConferenceById($conference_id)
	{
		$request = (new Uninett\Api\Request)
			->setMethod('GET')
			->setUrl("{$this->api_endpoint}/conferences/{$conference_id}");

		$response = $this->client->send($request);

		return View::make('conference.show')->with($response);
	}
}
