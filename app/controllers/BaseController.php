<?php

class BaseController extends Controller {

	/** Base url for the API this application communicates with
	 * @var string
	 */
	protected $api_endpoint;
	protected $base_url;

	function __construct()
	{
		$this->base_url = Config::get('uninett.api_base_uri');
		$this->api_endpoint = Config::get('uninett.api_endpoint_uri');
	}


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

		if(!Session::has('access_token')) {
			View::share('authenticated', false);
			View::share('access_token', false);

			return;
		}

		View::share('authenticated', true);
		View::share('access_token', Session::get('access_token'));
	}

	public function toCollection($response){
		return new \Illuminate\Support\Collection($response);
	}

}
