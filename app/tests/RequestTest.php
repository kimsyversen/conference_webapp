<?php
use \Mockery as Mock;

class RequestTest extends TestCase {

	public $api_endpoint;
	public $base_url;
	public function setUp()
	{
		//$this->base_url = Config::get('uninett.api_base_uri');
		$this->api_endpoint = 'http://localhost:8000/api/v1'; //Config::get('uninett.api_endpoint_uri');
	}
	protected function tearDown() {
		Mock::close();
	}

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function test_a_working_request()
	{

		$mockClient = Mock::mock('Uninett\Api\Client', [
			new \Uninett\Api\ResponseFormatter,
			Mock::mock('Guzzle\Http\Client')
		]);

		$request = new Uninett\Api\Request();

		$request->setMethod('GET');
		$request->setUrl('http://localhost:8000/api/v1/conferences');

		//This returns exception
		$mockResponse = $mockClient
			->shouldReceive('send')
			->with($request);

	}

}