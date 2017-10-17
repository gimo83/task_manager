<?php

namespace App\Controllers;


class UserController
{

	private $app;

	public function __construct($app)
	{
		$this->app = $app;
		$this->app->get('index',$this->index());
	}

	public function index()
	{
		$this->app->logger->info("test");
		

	}
 
	
}