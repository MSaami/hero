<?php

$router->map('GET' , '/' , function($request){
	
	$response = new Zend\Diactoros\Response;

	$response->getBody()->write('Hello World');

	return $response;

});
