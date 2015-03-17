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
		$realRequest = new Uninett\Api\Request(new \Uninett\Api\ResponseFormatter());


		$mock = Mock::mock('Uninett\Api\Request', [new \Uninett\Api\ResponseFormatter]);

		//$request = $mock->shouldReceive('createRequest')->with('GET', "{$this->api_endpoint}/conferences");

		 $mock->shouldReceive('createRequest')->with('GET', "{$this->api_endpoint}/conferences");

		//$realRequest->createRequest($request);
	}

}