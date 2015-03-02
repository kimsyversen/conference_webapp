<?php

class BaseController extends Controller {


	/** Base url for the API this applications communicates with
	 * @var string
	 */
	protected $api_base_url = "http://localhost:8000";

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout)) {
			$this->layout = View::make($this->layout);
		}
		//TODO: Stick to access_token?
		if(Session::has('access_token'))
			View::share('access_token', Session::get('access_token'));
		else
			View::share('access_token', false);
	}

	protected function getAccesstoken()
	{
		return Session::get('access_token');
	}
}
