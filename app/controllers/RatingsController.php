<?php

class RatingsController extends BaseController {

	private $request;

	function __construct(\Uninett\Api\Request $request)
	{
		$this->request = $request;
		parent::__construct();
	}

	public function show()
	{
		$conference_id = Session::get('conference_id');
		$session_id = Session::get('session_id');

		if (Request::ajax())
		{
				//If user is authenticated
				if (Session::has('access_token')) {
					$this->request->createTokenGetRequest('GET', "{$this->api_endpoint}/conferences/{$conference_id}/sessions/{$session_id}/ratings/create");

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
		$conference_id = Session::get('conference_id');
		$session_id =  Session::get('session_id');


		//This method does not account for posting rating for the same session twice.
		//This should be handled by the get method.
		if (Request::ajax())
		{
			//If user is authenticated
			if (Session::has('access_token')) {
				$data = [
					'conference_id' => Session::get('conference_id'),
					'session_id' => Session::get('session_id')
				];

				Request::merge($data);

				$requestData = Request::except('_token');

				$url = "{$this->api_endpoint}/conferences/{$conference_id}/sessions/{$session_id}/ratings";

				Log::info($url);

				foreach($requestData as $key => $value)
					Log::info($key . " => " . $value);

				$this->request->createTokenPostRequest(
					'POST',
					"{$this->api_endpoint}/conferences/{$conference_id}/sessions/{$session_id}/ratings",
					[],
					$requestData,
					[]);

				$response = $this->request->send();



				return $response;

			}

			//TODO: What if not authenticated?

			return false;
		}
		else
			return "Not AJAX";

	}

}
