<?php

class ConferenceScheduleController extends \BaseController {

	private $request;

	function __construct(\Uninett\Api\Request $request)
	{
		$this->request = $request;
		parent::__construct();
	}

	public function index($conference_id)
	{
		$this->request->createTokenRequest(
			'GET',
			"{$this->api_endpoint}/conferences/{$conference_id}/schedule",
			[],
			[],
			[]
		);

		$response = $this->request->send();

/*		$sessions = $this->toCollection($response['data'])->sortBy('begins')->toArray();

		$paralell_sessions[] = array_shift($sessions);
		$begins_at = $paralell_sessions[0]['begins'];
		$ends_at = $paralell_sessions[0]['ends'];

		dd($paralell_sessions);
		foreach($sessions as $session)
		{
			if ($session['begins'] == $)

		}
*/


		return View::make('schedule.index')->with(['data' => $response]);
	}
}
