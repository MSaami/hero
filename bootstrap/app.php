<?php

// starting session
session_start();


// include autoloader 
require_once __DIR__ . '/../vendor/autoload.php';

try{
	// load env file
	$dotenv = Dotenv\Dotenv::create(__DIR__ . '/../');
	$dotenv->load();
} catch(Dotenv\Exception\InvalidPathException $e){
	die('Please create .env file');
}

require_once __DIR__ . '/container.php';

$router = $container->get('router');


require_once __DIR__ . '/../routes/web.php';

$response = $router->dispatch($container->get('request'));




