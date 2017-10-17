<?php

namespace App\Controllers;

use App\Controllers\UserController;
use MartynBiz\Slim3Controller\Controller;

class ApiController extends Controller 
{

	public static function buildRoute($app)
	{
		$app->group('/user', function () use ($app) { UserController::buildRoute($app); } );
		
		//$container = $app->getContainer();
		//$container[UserController::Class] = new UserController($app);

	}
	
}