<?php

class ConferencePersonalScheduleController extends \BaseController {

	private $request;

	function __construct(\Uninett\Api\Request $request)
	{
		$this->request = $request;
		parent::__construct();
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index($conference_id)
	{
		if($this->userIsAuthenticated())
		{
			$this->request->createTokenGetRequest('GET', "{$this->api_endpoint}/conferences/{$conference_id}/schedule/personal");

			$response = $this->request->send();

			return View::make('conference.schedule.personal.index')->with(['data' => $response]);
		}

		//TODO: Ta hensyn tiul at bruker ikke kan være det?
	}



	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
