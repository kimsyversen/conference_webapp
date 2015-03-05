<?php
use Carbon\Carbon;
use Uninett\Api\Request as ApiRequest;

/**
 * Class SessionsController
 */
class SessionsController extends \BaseController {

	/**
	 * @var ApiRequest
	 */
	private $request;

	/**
	 * @param ApiRequest $request
	 */
	function __construct(\Uninett\Api\Request $request)
	{
		parent::__construct();

		$this->request = $request;
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
		$this->request->createRequest(
			'POST',
			"{$this->base_url}/oauth/access_token",
			null,
			array_merge(Config::get('uninett.oauth_info'), Request::all()),
			[]
		);

		$response = $this->request->send();

		if(isset($response['errors']))
			return Redirect::back()->with($response);

		$this->putAccessTokenInSession($response);

		return Redirect::route('conferences_path')->with('messages', ['You are now logged in.']);
	}

	/**
	 * Setup acccess_token in session, add expire time to be able to easy see when it expires
	 * @param $response
	 */
	private function putAccessTokenInSession($response)
	{
		$expire_time = ['expires_at' => Carbon::now()->addSeconds($response['expires_in'])];

		$access_token = array_merge($response, $expire_time);

		Session::put('access_token', $access_token);
	}

	/**
	 * Destroy everything in session
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function destroy()
	{
		Session::flush();

		return Redirect::route('main_path')->with('messages', ['You have now been logged out']);
	}
}
