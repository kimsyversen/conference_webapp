<?php

class RatingsController extends BaseController {

	private $request;

	function __construct(\Uninett\Api\Request $request)
	{
		$this->beforeFilter('authenticated');

		$this->request = $request;

		parent::__construct();
	}

	public function index($conference_id, $session_id) {

		$this->request->createTokenRequest('GET', "{$this->api_endpoint}/conferences/{$conference_id}/sessions/{$session_id}/ratings/create");

		$response = $this->request->send();

		if(isset($response['data']['rateable']))
			return View::make('conference.rating.index')->with('data', ['rateable' => true]);
		else
			return View::make('conference.rating.index')->with('data', ['rateable' => false]);
	}

	public function index2($conference_id, $session_id) {

		if(Request::ajax())
		{
			$this->request->createTokenRequest('GET', "{$this->api_endpoint}/conferences/{$conference_id}/sessions/{$session_id}/ratings/create");

			$response = $this->request->send();

			return $response;
		}
	}

	public function store()
	{

		if(Request::ajax())
		{
			return "Yes!";
		}

/*		$conference_id = Session::get('conference_id');
		$session_id =  Session::get('session_id');

		$data = [
			'conference_id' => Session::get('conference_id'),
			'session_id' => Session::get('session_id'),
		];

		//$method, $url, $headers = [], $body = null, $options = [])

		$this->request->createTokenRequest('POST', "{$this->api_endpoint}/conferences/{$conference_id}/sessions/{$session_id}/ratings",
			[],
			[Request::merge($data)],
			[]);

		$response = $this->request->send();

		dd($response);

		 return "store";*/
	}



	public function show()
	{
		return "Wuhu, show it!";
	}
}
