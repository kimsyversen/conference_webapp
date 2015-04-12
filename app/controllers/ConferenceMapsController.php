<?php

class ConferenceMapsController extends \BaseController {

	private $client;

	function __construct(\Uninett\Api\Client $client)
	{
		$this->client = $client;
		parent::__construct();
	}

	public function index($conference_id)
	{
		$request = (new Uninett\Api\Request)
			->setMethod('GET')
			->setUrl("{$this->api_endpoint}/conferences/{$conference_id}/maps");

		$response = $this->client->send($request);

		if(isset($response['data']))
			return View::make('conference.maps.index')->with(['data' => $response]);

		return View::make('conference.maps.index');
	}


}