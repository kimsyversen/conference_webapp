<?php namespace Uninett\Api;

use Session;
use Guzzle\Http\Client;
use GuzzleHttp\Exception\ParseException;
use Guzzle\Http\Exception\CurlException;
use Guzzle\Common\Exception\RuntimeException;
use Guzzle\Http\Exception\ClientErrorResponseException;
use Guzzle\Http\Exception\ServerErrorResponseException;

/**
 * Class Request
 * @package Uninett\Api
 */
class Request  {

	/**
	 * @var
	 */
	protected $url;
	/**
	 * @var
	 */
	protected $method;
	/**
	 * @var
	 */
	protected $headers;
	/**
	 * @var
	 */
	protected $body;
	/**
	 * @var array
	 */
	protected $options = [];

	/**
	 * @var Client
	 */
	public $client;

	/**
	 * @var
	 */
	public $response;

	/**
	 * @var ResponseFormatter
	 */
	private  $responseFormatter;

	/**
	 * @param ResponseFormatter $responseFormatter
	 */
	public function __construct(\Uninett\Api\ResponseFormatter $responseFormatter)
	{
		$this->responseFormatter = $responseFormatter;

		$this->client = new Client();
	}

	/**
	 * @param $method
	 * @param $url
	 * @param array $headers
	 * @param null $body
	 * @param array $options
	 */
	public function createRequest($method, $url, $headers = [], $body = null, $options = [])
	{
		$this->method = $method;
		$this->url = $url;
		$this->headers = $headers;
		$this->body = $body;
		$this->options = $options;
	}

	/**
	 * @param $method
	 * @param $url
	 * @param array $headers
	 * @param null $body
	 * @param array $options
	 */
	public function createTokenRequest($method, $url, $headers = [], $body = null, $options = [])
	{
		$url = $url . "?access_token=" . Session::get('access_token')['access_token'];

		$this->createRequest($method, $url, $headers, $body, $options);
	}


	/**
	 * @return array
	 */
	public function send()
	{
		$request = $this->client->createRequest(
			$this->method,
			$this->url,
			$this->headers,
			$this->body,
			$this->options
		);

		/* A list of exceptions and their explaination
		 * may be found here: http://api.guzzlephp.org/namespace-Guzzle.Http.Exception.html
		 */
		try {

			$this->response = $request->send($request);

			return $this->parseResponse($this->response);
		}
		catch(ClientErrorResponseException $ex)
		{
			/**
			 * Check for 4xx status codes that is returned from the API
			 */
			if($ex->getResponse()->getStatusCode() == 401)
				return $this->responseFormatter->error(['Wrong credentials!']);

			/**
			 * If validation exception, parse the response to a format the error view understands.
			 */
			if($ex->getResponse()->getStatusCode() == 422)
			{
				$response = "";
				foreach($ex->getResponse()->json()['errors'] as $messages)
					foreach($messages as  $message)
					$response[] = $message;

				return $this->responseFormatter->error($response);
			}

			$errorCode = $ex->getResponse()->getStatusCode();
			return $this->responseFormatter
				->error(["A not implemented translation for error code {$errorCode} occured"]);

		}
		catch(ServerErrorResponseException $ex)
		{
			$message = $ex->getResponse();
			$errorCode = $ex->getResponse()->getStatusCode();

			return $this->responseFormatter
				->error(["A not implemented translation for error code {$errorCode} occured with message {$message}"]);

		}
		catch(CurlException $ex)
		{
			$response = $ex->getMessage();

			return $this->parseResponse($response);
		}
	}

	/**
	 * This has the responsibility to see if we can parse the body of the response
	 * @param $response
	 * @return array
	 */
	private function parseResponse($response)
	{
		try
		{
			return $this->responseFormatter->response($response->json());
		}
		/**
		 * This exception occurs if json cannot be parsed?
		 */
		catch(ParseException $ex)
		{
			return $this->responseFormatter->error($ex->getMessage());
		}

		/**
		 * This exception occurs at least when there is something wrong with the API
		 * and the response cannot be parsed
		 */
		catch(RuntimeException $ex)
		{
			return $this->responseFormatter->error(["Could not parse the response from API"]);
		}
	}
}