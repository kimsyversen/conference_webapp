<?php


class TwitterNewsFeedController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /twitternewsfeed
	 *
	 * @return Response
	 */
	public function index()
	{

		return Twitter::getUserTimeline(array('screen_name' => 'nokios2015', 'count' => 1, 'format' => 'json'));


	}

	/**
	 * Show the form for creating a new resource.
	 * GET /twitternewsfeed/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /twitternewsfeed
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /twitternewsfeed/{id}
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
	 * GET /twitternewsfeed/{id}/edit
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
	 * PUT /twitternewsfeed/{id}
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
	 * DELETE /twitternewsfeed/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}