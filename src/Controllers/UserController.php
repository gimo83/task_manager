<?php

namespace App\Controllers;


class UserController
{

	private $app;
	private $container;


	public function __construct($app)
	{
		$this->app = $app;
		$this->container = $app->getContainer();
	}

	public static function buildRoute($app)
	{
		$app->get('', UserController::Class.':index');
		$app->get('/', UserController::Class.':index');
		$app->get('/index', UserController::Class.':index');

		$container = $app->getContainer();
		$container[UserController::Class] = new UserController($app);

	}

	public function index($request,$response,$args)
	{
		//$this->container->logger->debug('test');

		return $response->write('Hi');

	} 
	
}