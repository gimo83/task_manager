<?php

namespace App\Controllers;


class ApiController
{

	public static function buildRoute($app)
	{
		$app->group('/user', function () use ($app) { UserController::buildRoute($app); } );
		
		//$container = $app->getContainer();
		//$container[UserController::Class] = new UserController($app);

	}
	
}