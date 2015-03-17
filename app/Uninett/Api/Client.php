<?php namespace Uninett\Api;

use Codeception\Lib\Connector\Guzzle;
use Guzzle\Common\Exception\GuzzleException;
use Log;
use Session;
use Guzzle\Http\Client as GuzzleClient;
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
class Client  {

	private $client;
	/**
	 * @var ResponseFormatter
	 */
	private $responseFormatter;

	/**
	 * @param ResponseFormatter $responseFormatter
	 */
	public function __construct(\Uninett\Api\ResponseFormatter $responseFormatter, GuzzleClient $client)
	{
		$this->responseFormatter = $responseFormatter;
		$this->client = $client;
	}
	/**
	 * @return array
	 */
	public function send(Request $requestParams)
	{
		$request = $this->client->createRequest(
			$requestParams->getMethod(),
			$requestParams->getUrl(),
			$requestParams->getHeaders(),
			$requestParams->getBody(),
			$requestParams->getOptions());

		/* A list of exceptions and their explaination
		 * may be found here: http://api.guzzlephp.org/namespace-Guzzle.Http.Exception.html
		 */
		try {

			$response = $this->client->send($request);

			return $this->parseResponse($response);
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
				$response2 = "";
				foreach($ex->getResponse()->json()['errors'] as $messages)
					foreach($messages as  $message)
						$response2[] = $message;

				return $this->responseFormatter->error($response2);
			}

			//If we try to access something like conferences/asdasdads/schedule instead of  conferences/1/schedule
			//TODO: This also kicks in when we try to request to the wrong API URL
			if($errorCode === 404)
				throw new NotFoundHttpException;

			$errorCode = $ex->getResponse()->getStatusCode();

			Log::debug($ex->getMessage());
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