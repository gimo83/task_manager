<?php

namespace App\Controllers;


class TaskController
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
		$app->get('', TaskController::Class.':getAllTasks');

		$container = $app->getContainer();
		$container[TaskController::Class] = new TaskController($app);

	}

	public function getAllTasks($request,$response,$args)
	{
		//$this->container->logger->debug('test');

		return $response->write('Hi');

	} 

	public function createTask($request,$response,$args)
	{
		return $response;
	}
	
}