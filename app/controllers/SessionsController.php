<?php
use Carbon\Carbon;
use Uninett\Api\Client as ApiRequest;
use Uninett\Helpers\AccessToken;

/**
 * Class SessionsController
 */
class SessionsController extends \BaseController {


	/**
	 * @var ApiRequest
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
	 * @return \Illuminate\View\View
	 */
	public function createModal()
	{
		return View::make('sessions.create-modal');
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
			//return $response;
			return Redirect::route('login_path')->with($response);

		AccessToken::set($response);

		return Redirect::back()->with('messages', ['You are now logged in']);

		//return Redirect::route('conferences_path')->with('messages', ['You are now logged in']);

	}

	/**
	 * Destroy everything in session
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function destroy()
	{
		$messages = ['You have now been logged out'];

		if(Session::has('conference_id')){
			$conference_id = Session::get('conference_id');

			Session::flush();

			return Redirect::route('conference_path', ['conference_id' => $conference_id])->with($messages);
		}
		return Redirect::route('conferences_path')->with($messages);
	}
}
