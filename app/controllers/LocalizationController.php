<?php

class LocalizationController extends \BaseController {

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = ['language' => 'in:en,no'];

		if(Request::has('language') && !empty(Request::get('language'))) {
			$language = Request::get('language');

			$validator = Validator::make(compact($language),$rules);

			if($validator->passes()) {
				Session::put('language', $language);
				Cookie::queue('language', $language, 22896000);
				App::setLocale($language);
				return Redirect::back();
			}
		}

		return Redirect::back()->with(['error' => 'Could not change language']);
	}
}
