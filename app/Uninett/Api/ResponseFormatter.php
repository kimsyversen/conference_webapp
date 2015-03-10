<?php namespace Uninett\Api;
use Session;

/**
 * Class ResponseFormatter
 * @package Uninett\Api
 */
class ResponseFormatter {

	/**
	 * @param $errors
	 * @return array
	 */
	public function error($errors)
	{
		//Make the errors available both in session and the response?
		Session::flash('errors', $errors);

		$response = [
			'errors' => $errors
		];

		return $response;
	}

	/**
	 * @param $data
	 * @return mixed
	 */
	public function response($data)
	{
		return $data;
	}
}

