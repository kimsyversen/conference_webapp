<?php

class ConferenceNewsFeedController extends \BaseController {

	private $request;

	function __construct(\Uninett\Api\Request $request)
	{
		$this->request = $request;
		parent::__construct();
	}

	public function index($conference_id)
	{
		$this->request->createRequest('GET', "{$this->api_endpoint}/conferences/{$conference_id}/newsfeeds");

		$response = $this->request->send();

		return View::make('conference.newsfeed.index')->with(['data' => $response]);
	}

}