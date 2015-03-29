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


}