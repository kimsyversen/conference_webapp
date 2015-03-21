<?php

use Uninett\Helpers\AccessToken;

class ConferenceChatsController extends \BaseController {

	private $client;

	function __construct(\Uninett\Api\Client $client)
	{
		$this->client = $client;
		parent::__construct();
	}

	/**
	 * Display a listing of the resource.
	 * GET /conferencechats
	 *
	 * @return Response
	 */
	public function index()
	{
		$conference_id = Session::get('conference_id');

		$request = (new Uninett\Api\Request)
			->setMethod('GET')
			->setUrl("{$this->api_endpoint}/conferences/{$conference_id}/chats")
			->setAccessTokenInHeader(AccessToken::get());

		$response = $this->client->send($request);


		return View::make('conference.chats.index')->with('data', $response);
	}

	/**
	 * Display the specified resource.
	 * GET /conferencechats/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($conference_id, $chat_id)
	{
		$request = (new Uninett\Api\Request)
			->setMethod('GET')
			->setUrl("{$this->api_endpoint}/conferences/{$conference_id}/chats/{$chat_id}")
			->setAccessTokenInHeader(AccessToken::get());

		$response = $this->client->send($request);

		return View::make('conference.chats.show')->with('chat', $response);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /conferencechats/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /conferencechats/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /conferencechats/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}