<?php namespace Uninett\Helpers; 
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Redirect;


/**
 * Class AccessToken
 * @package Uninett\Helpers
 */
class AccessToken {

	/**
	 * Returns the access_token
	 * @return mixed
	 */
	public static function get()
	{
		return Session::get('access_token')['access_token'];
	}

	/**
	 * Insert access_token to session together with expire_time
	 * @param $response
	 * @return array
	 */
	public static function set($response)
	{
		$expire_time = [ 'expires_at' => Carbon::now()->addSeconds($response['expires_in']) ];

		$access_token = array_merge($response, $expire_time);

		Session::put('access_token', $access_token);

		return $access_token;
	}

	/**
	 * See if the access_token is still valid.
	 * @return mixed
	 */
	public static function validate()
	{
		if(Session::has('access_token'))
		{
			$access_token = Session::get('access_token');

			if(isset($access_token['expires_at'])) {

				$expire_time = $access_token['expires_at'];

				$now = \Carbon\Carbon::now();

				if($now->gt($expire_time)) {
					Session::remove('access_token');
					return Redirect::route('login_path')->with('messages', ['You have been logged out because your session has timed out']);
				}
			}
		}
	}
}