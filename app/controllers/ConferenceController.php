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
		$request = (new Uninett\Api\Request)->setMethod('GET')->setUrl("{$this->api_endpoint}/conferences");

		$response = $this->client->send($request);

		return View::make('conference.index')->with($response);
	}

	public function getConferenceById($conference_id)
	{
		$request = (new Uninett\Api\Request)->setMethod('GET')->setUrl("{$this->api_endpoint}/conferences/{$conference_id}");

		$response = $this->client->send($request);

		return View::make('conference.show')->with($response);
	}
}
