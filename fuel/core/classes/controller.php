<?php

namespace Fuel\Core;

abstract class Controller
{

	public $request;

	public $response_status = 200;

	public function __construct(\Request $request)
	{
		$this->request = $request;
	}

	public function before() {}

	public function after($response)
	{
		// Make sure the $response is a Response object
		if ( ! $response instanceof Response)
		{
			$response = \Response::forge($response, $this->response_status);
		}

		return $response;
	}

	public function param($param, $default = null)
	{
		return $this->request->param($param, $default);
	}

	public function params()
	{
		return $this->request->params();
	}

    public static $app = null;

    public static function init()
    {
        self::$app = new Data();
        self::$app ->getPost();
    }
}

