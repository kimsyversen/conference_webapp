<?php namespace Uninett\Api;

/**
 * Class ResponseFormatter
 * @package Uninett\Api
 */
class ResponseFormatter {

	/**
	 * @param $errors
	 * @return array
	 */
	public function error( $errors)
	{
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

