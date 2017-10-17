<?php

use Slim\Http\Request;
use Slim\Http\Response;

use App\Controllers\UserController;
// Routes
/*
$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
*/
$app->group('/v1', function() use ($app){
	new UserController($app);
});
