<?php namespace Uninett\Api;

use Guzzle\Common\Exception\RuntimeException;
use Guzzle\Http\Client;

use Guzzle\Http\Exception\ClientErrorResponseException;
use Guzzle\Http\Exception\CurlException;
use Guzzle\Http\Exception\ServerErrorResponseException;
use GuzzleHttp\Exception\ParseException;
use Session;

class Request  {
	protected $url;
	protected $method;
	protected $headers;
	protected $body;
	protected $options = [];

	public $response;

	public $client;

	protected $auth;

	public function __construct(Auth $auth = null)
	{
		$this->auth = $auth;

		$this->client = new Client();
	}

	public function createRequest($method, $url, $headers = [], $body = null, $options = [])
	{
		$this->method = $method;
		$this->url = $url;
		$this->headers = $headers;
		$this->body = $body;
		$this->options = $options;
	}

	public function createTokenRequest($method, $url, $headers = [], $body = null, $options = [])
	{
		$url = $url . "?access_token=" . Session::get('access_token')['access_token'];

		$this->createRequest($method, $url, $headers, $body, $options);
	}


	public function send()
	{
		//A list of exceptions and their explaination
		//may be found here: http://api.guzzlephp.org/namespace-Guzzle.Http.Exception.html
		try {

			$request = $this->client->createRequest(
				$this->method,
				$this->url,
				$this->headers,
				$this->body,
				$this->options
			);

			$this->response = $request->send();

			return $this->parseResponse($this->response);
		}
		catch(ClientErrorResponseException $ex)
		{
			$this->response = $ex->getResponse();

			return $this->parseResponse($this->response);
		}
		catch(ServerErrorResponseException $ex)
		{
			$this->response = $ex->getResponse();

			return $this->parseResponse($this->response);
		}
		catch(CurlException $ex)
		{
			$this->response = $ex->getMessage();

			return $this->parseResponse($this->response);
		}
	}

	private function parseResponse($response)
	{
		try
		{
			$output = $response->json();

			return $output;
		}

			/**
			 * This exception occurs if json cannot be parsed?
			 */
		catch(ParseException $ex)
		{
			return $this->returnError($ex->getMessage());
		}

			/**
			 * This exception occurs at least when there is something wrong with the API
			 * and the response cannot be parsed
			 */
		catch(RuntimeException $ex)
		{
			return $this->returnError("Could not parse the response from API");
		}
	}

	private function returnError($message)
	{
		/**
		 * Guess this should be a array with the name error, just like the one returned from the API
		 */

		return [
			'error' =>  $message
		];
	}
}