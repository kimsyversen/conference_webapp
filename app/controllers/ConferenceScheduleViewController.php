<?php

class ConferenceScheduleViewController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = ['language' => 'in:traditional,calendar'];

		if(Request::has('view') && !empty(Request::get('view'))) {
			$default_schedule_view = Request::get('view');

			$validator = Validator::make(compact($default_schedule_view),$rules);

			if($validator->passes()) {

				Session::put('default_schedule_view', $default_schedule_view);
				Cookie::queue('default_schedule_view', $default_schedule_view);
				return Redirect::back();
			}
		}

		return Redirect::back()->with(['error' => 'Could not change language']);
	}



}
