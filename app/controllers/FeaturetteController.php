<?php

class FeaturetteController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /featurette
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('conference.other.featurette');
	}


}