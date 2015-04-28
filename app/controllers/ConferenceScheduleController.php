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

		$requestRating = (new Uninett\Api\Request)->setMethod('GET');

		$default_view = "traditional";

		$status = -1;

		if($this->userIsAuthenticated()) {
			$request->setUrl("{$this->api_endpoint}/conferences/{$conference_id}/schedule/authenticated")
				->setAccessTokenInHeader(AccessToken::get());

			$requestRating->setUrl("{$this->api_endpoint}/conferences/{$conference_id}/ratings/create")
				->setAccessTokenInHeader(AccessToken::get());

			$responseRating = $this->client->send($requestRating);

			$status = $responseRating['data'][0]['code'];
		}

		else
			$request->setUrl("{$this->api_endpoint}/conferences/{$conference_id}/schedule");


		$response = $this->client->send($request);

		if( Cookie::has('default_schedule_view'))
		{
			$view = Cookie::get('default_schedule_view');

			if($view != "traditional")
			{
				$events = [];
				//Incoming dates are in UTC timezone, mean they will represented in something like 2015-05-05UTC12:00:00
				//Somehow, this does not show up on iphones and we need to format the date to this 2015-05-05T12:00:00
				//We do not know if this affects other phones
				foreach($response['data'] as $sessionGroup) {
					foreach($sessionGroup['sessions'] as $session) {
						$speakers = "";

						//TODO: Commasepareted list of speakers is preferred
						foreach($session['speakers'] as $speaker)
							$speakers = $speakers . $speaker['first_name'] . " " . $speaker['last_name'] .", ";

						$events[] = [
							'title' => $session['title'],
							'start' =>  (new  \Carbon\Carbon($session['start_date']['date']))->format(DateTime::ISO8601),
							'end' =>   (new  \Carbon\Carbon($session['end_date']['date']))->format(DateTime::ISO8601),
							'location' => $session['location'],
							'speakers' => $speakers,
							'url' => '/' . $session['links']['session']['uri'],
							'color' => $this->decideColor($session['category'])
						];
					}
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
				$default_view = "calendar";
			}
		}
/*		Cookie::forever('default_schedule_view', $default_view, 22896000);*/
		Cookie::queue('default_schedule_view', $default_view, 22896000);


		return View::make('conference.schedule.conference.index')->with(['data' => $response, 'default_view' => $default_view, 'status' => $status]);
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
