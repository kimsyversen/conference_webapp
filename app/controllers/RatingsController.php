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

		if(Request::ajax())
			if ($this->userIsAuthenticated()) {
				$this->request->createTokenGetRequest('GET', "{$this->api_endpoint}/conferences/{$conference_id}/sessions/{$session_id}/ratings/create");

				$response = $this->request->send();

				if (isset($response['data'][0]['code']))
					return View::Make('conference.sessions.partials.rating', ['status' => $response['data'][0]['code']]);
			}
			else
				return View::Make('conference.sessions.partials.rating', ['status' => -1]);


		return Redirect::route('home_path')->with([
			'errors' =>  ['Something went wrong when trying to display the rating form.']
		]);
	}

	public function store()
	{
		$conference_id = Session::get('conference_id');
		$session_id =  Session::get('session_id');

		//This method does not account for posting rating for the same session twice. That should be handled by the get method.

		if (Request::ajax())
		{
			if ($this->userIsAuthenticated()) {

				$data = [
					'conference_id' => Session::get('conference_id'),
					'session_id' => Session::get('session_id')
				];

				Request::merge($data);

				$requestData = Request::except('_token');

				$this->request->createTokenPostRequest(
					'POST',
					"{$this->api_endpoint}/conferences/{$conference_id}/sessions/{$session_id}/ratings",
					[],
					$requestData,
					[]);

				$response = $this->request->send();

				return $response;
			}
		}
		else
			return "Not AJAX";
	}
}
