<?php
use Guzzle\Http\Client;
use Guzzle\Http\Exception\ClientErrorResponseException;

class SessionsController extends \BaseController {

	function __construct()
	{
		//$this->beforeFilter('api-guest');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		return View::make('sessions.create');
	}


	public function login()
	{
		$client = new Client();

		$secrets = [
			'client_id' => 1,
			'client_secret' => 'asdf',
			'grant_type' => 'password'
		];


		$parameters = array_merge($secrets, Request::all());

		$request = $client->createRequest(
			'POST',
			"http://localhost:8000/oauth/access_token",
			null,
			$parameters,
			[]
		);

			try {

				$response = $request->send();

				Session::put('access_token', $response->json());

				return Redirect::back();

			}
			catch(Exception $ex)
			{
				dd($ex->getMessage());
				//Flash::error('Could not login user. Wrong credentials?');

				return Redirect::back();
			}

	}

	public function destroy()
	{

		Session::remove('email');
		Session::remove('password');

		Flash::message('You have now been logged out');

		return Redirect::route('home');
	}
}
