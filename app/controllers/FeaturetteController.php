<?php

class FeaturetteController extends \BaseController {

	public function index()
	{
		return View::make('conference.other.featurette');
	}

	public function createModal()
	{
		return View::make('conference.other.featurettem');
	}
}