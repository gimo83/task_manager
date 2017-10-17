<?php

namespace App\Controllers;

use MartynBiz\Slim3Controller\Controller;
use App\Models\UserModel;

class UserController extends Controller
{

	public static function buildRoute($app)
	{
		$controller = new UserController($app);

		$app->get('', $controller('getAll'));

	}

	public function getAll()
	{
		//$this->container->logger->debug('test');
		
		$users = UserModel::all();
		
		return $this->response->write($users);
	} 
	
}