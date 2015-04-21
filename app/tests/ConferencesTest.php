<?php
use \Mockery as Mock;

class ConferencesTest extends OAuthApiTester {

	public function setUp()
	{
		parent::setUp();
		$this->base_url = Config::get('uninett.base_url');
	}

}