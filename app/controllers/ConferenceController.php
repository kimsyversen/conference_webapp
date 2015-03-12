<?php

class ConferenceController extends \BaseController {

	private $request;

	function __construct(\Uninett\Api\Request $request)
	{
		parent::__construct();

		$this->request = $request;
	}


	public function index()
	{
		$this->request->createRequest('GET', "{$this->api_endpoint}/conferences");

		$response = $this->request->send();

		return View::make('conference.index')->with($response);
	}

	public function getConferenceById($conference_id)
	{
		$this->request->createRequest('GET',  "{$this->api_endpoint}/conferences/{$conference_id}");

		/**
		 * TODO: REMOVE?
		 * Insert conference_id to session so users
		 * may go to their profile relative to a conference (see nav.blade.php)
		 */
		/*Session::put('conference_id', $conference_id);*/

		$response = $this->request->send();

		return View::make('conference.show')->with($response);
	}
}
