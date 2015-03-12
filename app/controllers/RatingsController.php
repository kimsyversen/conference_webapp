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

		JavaScript::put([
			'foo' => 'bar',
			'age' => 29
		]);

		if (Request::ajax())
		{
				//If user is authenticated
				if (Session::has('access_token')) {
					$this->request->createTokenRequest('GET', "{$this->api_endpoint}/conferences/{$conference_id}/sessions/{$session_id}/ratings/create");

					$response = $this->request->send();

					if (isset($response['data'][0]['code']))
					{
						/*$view = View::Make('conference.sessions.partials.rating', ['status' => $response['data'][0]['code']]);
						return $view;*/

						return $response['data'][0]['code'];
					}
				}
				else
					//If user is not authenticated
					/*$view = View::Make('conference.sessions.partials.rating', ['status' => -1]);
					return $view;*/
					return -1;
		}
	}

	public function store()
	{
	/*	$conference_id = Session::get('conference_id');
		$session_id =  Session::get('session_id');*/


		//This method does not account for posting rating for the same session twice.
		//This should be handled by the get method.
		if (Request::ajax())
		{
			return 1;

/*			//If user is authenticated
			if (Session::has('access_token')) {

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

				return $response;

			}

			//TODO: What if not authenticated?

			return false;*/
		}
		else
			return "Not AJAX";

	}

}
