<?php
// DIC configuration

use Illuminate\Database\Capsule\Manager;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

$container = $app->getContainer();

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

    $settings = $container->get('settings')['db'];
    $capsule = new Manager();
    $capsule->addConnection($settings);
    $capsule->setEventDispatcher(new Dispatcher(new Container));
    $capsule->setAsGlobal();
    $capsule->bootEloquent();


//database
$container['db'] = function ($c) use ($capsule) {


	return $capsule;
};


// Flash messages
$container['flash'] = function ($c) {
    return new \Slim\Flash\Messages();
};