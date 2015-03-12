<?php

class RatingsController extends BaseController {

	private $request;

	function __construct(\Uninett\Api\Request $request)
	{
		//$this->beforeFilter('authenticated');

		$this->request = $request;

		parent::__construct();
	}

	public function show()
	{
		$conference_id = Session::get('conference_id');
		$session_id = Session::get('session_id');

		if (Request::ajax())
		{
			Log::info("{$this->api_endpoint}/conferences/{$conference_id}/sessions/{$session_id}/ratings/create");

				//If user is authenticated
				if (Session::has('access_token')) {
					$this->request->createTokenRequest('GET', "{$this->api_endpoint}/conferences/{$conference_id}/sessions/{$session_id}/ratings/create");

					$response = $this->request->send();

					if (isset($response['data'][0]['code']))
					{
						return $response['data'][0]['code'];
					}

				}
				else
					//If user is not authenticated
					return -1;
		}
	}

	public function store()
	{
/*		$conference_id = Session::get('conference_id');
		$session_id =  Session::get('session_id');

		$data = [
			'conference_id' => Session::get('conference_id'),
			'session_id' => Session::get('session_id'),
		];

		$data = array_merge($data, Request::all());

		$this->request->createTokenRequest('POST', "{$this->api_endpoint}/conferences/{$conference_id}/sessions/{$session_id}/ratings",
			[],
			[$data],
			[]);

		$response = $this->request->send();


		return true;*/
	}

}
