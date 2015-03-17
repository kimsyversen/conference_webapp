<?php namespace Uninett\Api; 
use Session;

class Request {
	/**
	 * @var
	 */
	public $url;
	/**
	 * @var
	 */
	public $method;
	/**
	 * @var
	 */
	public $headers = [];
	/**
	 * @var
	 */
	public $body = [];
	/**
	 * @var array
	 */
	public $options = [];

	/**
	 * @return mixed
	 */
	public function getUrl()
	{
		return $this->url;
	}

	/**
	 * @param mixed $url
	 */
	public function setUrl($url)
	{
		$this->url = $url;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getMethod()
	{
		return $this->method;
	}

	/**
	 * @param mixed $method
	 */
	public function setMethod($method)
	{
		$this->method = $method;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getHeaders()
	{
		return $this->headers;
	}

	/**
	 * @param mixed $headers
	 */
	public function setHeaders($headers = [])
	{
		$this->headers = $headers;

		return $this;
	}

	/**
	 * @param mixed $headers
	 */
	public function setAccessTokenInHeader($token)
	{
		if(Session::get('access_token')['access_token'])
			$this->headers = array_merge($this->headers, ['Authorization' =>  $token]);

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getBody()
	{
		return $this->body;
	}

	/**
	 * @param mixed $body
	 */
	public function setBody($body)
	{
		$this->body = $body;

		return $this;
	}

	/**
	 * @return array
	 */
	public function getOptions()
	{
		return $this->options;
	}

	/**
	 * @param array $options
	 */
	public function setOptions($options)
	{
		$this->options = $options;

		return $this;
	}

	public function createRequest($method, $url, $body = null, $headers = [], $options = [])
	{
		$this->setMethod($method);
		$this->setUrl($url);
		$this->setAccessTokenInHeader($headers);
		$this->setBody($body);
		$this->setOptions($options);

	}

}