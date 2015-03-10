<?php
/*App::fatal(function($exception)
{
	//die('FATAL ERROR: '.$exception->getMessage());

	//$errors = new \Uninett\Api\ResponseFormatter();

	//Session::flash('messages', ['You sda asdasdasd asdasd in.']);
	return Redirect::route('home_path')->with(['errors', 'You sda asdasdasd asdasd in.']);
	Flash::error('You sda asdasdasd asdasd in.');
	return View::make('main')->withErrors(['errors', 'asdsaf']);

});*/

App::missing(function($exception)
{
    return View::make('errors.not_found');
});