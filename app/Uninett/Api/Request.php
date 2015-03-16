<?php namespace Uninett\Api;

use Guzzle\Common\Exception\GuzzleException;
use Log;
use Session;
use Guzzle\Http\Client;
use GuzzleHttp\Exception\ParseException;
use Guzzle\Http\Exception\CurlException;
use Guzzle\Common\Exception\RuntimeException;
use Guzzle\Http\Exception\ClientErrorResponseException;
use Guzzle\Http\Exception\ServerErrorResponseException;
use Symfony\Component\HttpKernel\Exception\FatalErrorException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
		if(Session::get('access_token')['access_token'])
			$headers = array_merge($headers, ['Authorization' =>  Session::get('access_token')['access_token']]);

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
	public function createTokenGetRequest($method, $url, $headers = [], $body = null, $options = [])
	{


		$this->createRequest($method, $url, $headers, $body, $options);
	}

/*	public function createTokenPostRequest($method, $url, $headers = [], $body = null, $options = [])
	{
		$access_token =  ["access_token" => Session::get('access_token')['access_token'] ];

		$body = array_merge($access_token, $body);

		$headers = array_merge($access_token, $headers);

		$this->createRequest($method, $url, $headers, $body, $options);
	}*/

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
			$errorCode = $ex->getResponse()->getStatusCode();

			if($errorCode == 400)
				return $this->responseFormatter->error(['Bad request']);
			/**
			 * Check for 4xx status codes that is returned from the API
			 */
			if($errorCode == 401)
				return $this->responseFormatter->error(['Wrong credentials!']);

			/**
			 * If validation exception, parse the response to a format the error view understands.
			 */
			if($errorCode == 422)
			{
				$response = "";
				foreach($ex->getResponse()->json()['errors'] as $messages)
					foreach($messages as  $message)
						$response[] = $message;

				return $this->responseFormatter->error($response);
			}

			//If we try to access something like conferences/asdasdads/schedule instead of  conferences/1/schedule
			//TODO: This also kicks in when we try to request to the wrong API URL
			if($errorCode === 404)
				throw new NotFoundHttpException;

			$errorCode = $ex->getResponse()->getStatusCode();

			return $this->responseFormatter
				->error(["A not implemented translation for error code {$errorCode} occured"]);

		}
		catch(ServerErrorResponseException $ex)
		{
			$message = $ex->getResponse();
			$errorCode = $ex->getResponse()->getStatusCode();

			return $this->responseFormatter
				->error(["Cannot connect to server. Errorcode {$errorCode}"]);
		}
		catch(CurlException $ex)
		{
			//IF curl cannot connect to API
			//string '[curl] 7: Failed to connect to localhost port 8000: Connection refused [url] http://localhost:8000/api/v1/conferences/3/schedule' (length=128)
			return $this->responseFormatter->error(["It seems like the application cannot reach the server"]);
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
		catch(ServerErrorResponseException $ex)
		{
			$message = $ex->getResponse();
			$errorCode = $ex->getResponse()->getStatusCode();

			return $this->responseFormatter
				->error(["A not implemented translation for error code {$errorCode} occured with message {$message}"]);
		}
		catch(GuzzleException $ex)
		{
			return $this->responseFormatter->error($ex->getMessage());
		}
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