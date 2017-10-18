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
		
		//$users = $this->get('db')->table('user')->get();
		$data = [
			      "error"=>False,
	              'message'=>'',
	              "data"=>[]
	          ];
		$data['data'] = UserModel::all();



		return $this->response->withJson($data);
	} 
	
}