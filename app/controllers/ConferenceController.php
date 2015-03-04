<?php

class ConferenceController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$request = new \Uninett\Api\Request();

		$request->createRequest(
			'GET',
			"{$this->api_endpoint}/conferences",
			[],
			[],
			[]
		);

		$response = $request->send()['data'];


		return View::make('conferences.index')->with(compact('response'));
	}

	public function getConferenceById($id)
	{
		$request = new \Uninett\Api\Request();

		$request->createRequest(
			'GET',
			"{$this->api_endpoint}/conferences/{$id}",
			[],
			[],
			[]
		);

		$response = $request->send()['data'];


		return View::make('conferences.conference')->with(compact('response'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
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
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
