<?php

class AboutCreatorsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /aboutcreators
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('conference.about');
	}

	public function secret(){

		JavaScript::put([
			'events' => [
				[
					'title' => 'Kurs 2 - Hvordan ta i bruk KS SvarUt i kommuner og fylkeskommuner',
					'start' =>  '2015-04-09T10:00:00',
					'end' => '2015-04-09T11:00:00',
					'color' => '#123123'
				],
				[
					'title' => 'Kurs 4 - Hvordan ta i bruk KS SvarUt i kommuner og fylkeskommuner',
					'start' =>  '2015-04-09T10:00:00',
					'end' => '2015-04-09T11:00:00',
					'color' => '#312321'
				],
				[
					'title' => 'Kurs 6 - Hvordan ta i bruk KS SvarUt i kommuner og fylkeskommuner',
					'start' =>  '2015-04-09T10:00:00',
					'end' => '2015-04-09T11:00:00',
					'color' => '#42133'
				],
			],

		]);


		return View::make('conference.secret');
	}
}