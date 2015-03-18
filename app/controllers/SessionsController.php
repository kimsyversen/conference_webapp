<?php
use Carbon\Carbon;
use Uninett\Api\Client as ApiRequest;
use Uninett\Helpers\AccessToken;

/**
 * Class SessionsController
 */
class SessionsController extends \BaseController {

	/**
	 * @var ApiClient
	 */
	private $client;

	/**
	 * @param ApiRequest $client
	 */
	function __construct(\Uninett\Api\Client $client)
	{
		parent::__construct();

		$this->client = $client;
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function create()
	{
		return View::make('sessions.create');
	}

	/**
	 * Login user
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function login()
	{
		$request = (new Uninett\Api\Request)
			->setMethod('POST')
			->setUrl("{$this->base_url}/oauth/access_token")
			->setBody(array_merge(Config::get('uninett.oauth_info'), Request::all()));


		$response = $this->client->send($request);

		if(isset($response['errors']) || is_null($response))
			return Redirect::back()->with($response);

		AccessToken::set($response);

		//$this->storeAccessTokenInSession($response);

		return Redirect::route('conferences_path')->with('messages', ['You are now logged in']);
	}

	/**
	 * Setup acccess_token in session, add expire time to be able to easy see when it expires
	 * @param $response
	 */
/*	private function storeAccessTokenInSession($response)
	{
		$expire_time = ['expires_at' => Carbon::now()->addSeconds($response['expires_in'])];

		$access_token = array_merge($response, $expire_time);

		Session::put('access_token', $access_token);
	}*/

	/**
	 * Destroy everything in session
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function destroy()
	{
		Session::flush();

		return Redirect::route('conferences_path')->with('messages', ['You have now been logged out']);
	}
}
