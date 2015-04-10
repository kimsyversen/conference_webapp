<?php

use Uninett\Helpers\AccessToken;

class ConferenceScheduleController extends \BaseController {

	private $client;

	function __construct(\Uninett\Api\Client $client)
	{
		$this->client = $client;
		parent::__construct();

		$this->sendVariablesToJavascript();
	}

	public function index($conference_id)
	{
		$request = (new Uninett\Api\Request)->setMethod('GET');

		if($this->userIsAuthenticated())
			$request->setUrl("{$this->api_endpoint}/conferences/{$conference_id}/schedule/authenticated")
				->setAccessTokenInHeader(AccessToken::get());
		else
			$request->setUrl("{$this->api_endpoint}/conferences/{$conference_id}/schedule");

		$response = $this->client->send($request);


		//TODO: Cleanup
		$events = [];

		foreach($response['data'] as $sessionGroup) {
			foreach($sessionGroup['sessions'] as $session)
			$events[] = [
					'title' => $session['title'],
					'start' =>  (new  \Carbon\Carbon($session['start_date']['date']))->format('Y-m-dTH:i:s'),
					'end' =>   (new  \Carbon\Carbon($session['end_date']['date']))->format('Y-m-dTH:i:s'),
					'uri' => $session['links']['session']['uri'],
					'color' => $this->decideColor($session['category'])
				];
		}

		JavaScript::put([
			'events' => $events,
			'dayNames' => [
				Lang::get('calendar.dayNames.monday'),
				Lang::get('calendar.dayNames.tuesday'),
				Lang::get('calendar.dayNames.wednesday'),
				Lang::get('calendar.dayNames.thursday'),
				Lang::get('calendar.dayNames.friday'),
				Lang::get('calendar.dayNames.saturday'),
				Lang::get('calendar.dayNames.sunday')
			],
			'buttonText' => [
				'today' => Lang::get('calendar.buttonText.today'),
				'week' => Lang::get('calendar.buttonText.week'),
				'day' => Lang::get('calendar.buttonText.day'),
				'month' => Lang::get('calendar.buttonText.month'),
			]
		]);

		return View::make('conference.schedule.conference.index')->with(['data' => $response]);
	}


	private function decideColor($category)
	{
		switch($category) {
			case "professional":
				return 'rgb(197, 64, 11)';
				break;
			case "social":
				return 'rgb(79, 153, 197);';
				break;
			case "break":
				return 'rgb(61, 197, 91)';
				break;
			case "other":
				return 'rgb(197, 89, 179)';
				break;
		}
	}

}
