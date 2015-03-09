<?php

class ConferenceController extends \BaseController {

	private $request;

	function __construct(\Uninett\Api\Request $request)
	{
		parent::__construct();

		$this->request = $request;
	}


	public function index()
	{
		$this->request->createRequest(
			'GET',
			"{$this->api_endpoint}/conferences",
			[],
			[],
			[]
		);

		$response = $this->request->send();

/*
		$collection = new \Illuminate\Support\Collection($response);

		dd($collection);*/


		return View::make('conferences.index')->with($response);
	}

/*	function toModel($modelName, $models)
	{
		Eloquent::unguard();

		$collection = new Illuminate\Support\Collection;

		foreach($models as $model) {
			$newModel = new $modelName($model);
			$newModel->exists = true;
			$collection->push($newModel);
		}

		Eloquent::reguard();

		return $collection;
	}*/

	public function getConferenceById($id)
	{
		$this->request->createRequest(
			'GET',
			"{$this->api_endpoint}/conferences/{$id}",
			[],
			[],
			[]
		);

		/**
		 * Insert conference_id to session so users
		 * may go to their profile relative to a conference (see nav.blade.php)
		 */
		Session::put('conference_id', $id);

		$response = $this->request->send();

		return View::make('conferences.conference')->with($response);
	}

}
