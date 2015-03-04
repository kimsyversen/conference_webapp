<?php
use Carbon\Carbon;
use Guzzle\Http\Client;

class SessionsController extends \BaseController {

	public function create() {

		return View::make('sessions.create');
	}


	public function login()
	{
		$client = new Client();

		$request = $client->createRequest(
			'POST',
			"{$this->base_url}/oauth/access_token",
			null,
			array_merge(Config::get('uninett.oauth_info'), Request::all()),
			[]
		);

		try {
				$response = $request->send();

				//Setup acccess_token in session, add expire time to be able to easy see when it expires
				$expire_time = ['expires_at' => Carbon::now()->addSeconds($response->json()['expires_in'])];

				$access_token = array_merge($response->json(), $expire_time);

				Session::put('access_token', $access_token);

				return Redirect::route('profile_path')->with('messages', ['You are now logged in.']);
			}
			catch(Exception $ex)
			{
				dd($ex->getMessage());
				return Redirect::back()->with('messages', ['Could not login user. Wrong credentials?']);
			}

	}

	public function destroy()
	{

		Session::remove('access_token');

		return Redirect::route('main_path')->with('messages', ['You have now been logged out']);
	}
}
