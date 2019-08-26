<?php


$container = new League\Container\Container; 

$container->delegate(
	new League\Container\ReflectionContainer
);


$container->addServiceProvider(new App\Providers\AppServiceProvider());
$container->addServiceProvider(new App\Providers\ViewServiceProvider());

