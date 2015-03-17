<?php

class ConferenceNewsFeedController extends \BaseController {

	private $client;

	function __construct(\Uninett\Api\Client $client)
	{
		$this->client = $client;
		parent::__construct();
	}

	public function index($conference_id)
	{
		$request = (new Uninett\Api\Request)->setMethod('GET')->setUrl("{$this->api_endpoint}/conferences/{$conference_id}/newsfeeds");

		$response = $this->client->send($request);

		$twitterData = json_decode( Twitter::getUserTimeline(array('screen_name' => 'nokios2015', 'count' => 2, 'format' => 'json')), true);


		return View::make('conference.newsfeed.index')->with(['data' => $response, 'twitter' => $twitterData]);
	}

}