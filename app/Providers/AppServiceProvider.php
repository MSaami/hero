<?php

namespace App\Providers;

use League\Container\ServiceProvider\AbstractServiceProvider;	
use Zend\Diactoros\ServerRequestFactory;
use Zend\HttpHandlerRunner\Emitter\SapiEmitter;
use League\Route\Router;
use Zend\Diactoros\Response;
use League\Route\Strategy\ApplicationStrategy;

class AppServiceProvider extends AbstractServiceProvider
{
	protected $provides = [
		'router',
		'response',
		'emitter',
		'request'
	];
	public function register()
	{

		$container = $this->getContainer();



		$container->share('request', function(){
			return ServerRequestFactory::fromGlobals(
				$_SERVER  , $_GET , $_POST , $_COOKIE , $_FILES
			);
		});

		$container->share('router' , function() use ($container){
			$strategy = (new ApplicationStrategy)->setContainer($container);
			return (new Router)->setStrategy($strategy);
		});

		$container->share('response' , Response::class);

		$container->share('emitter' , SapiEmitter::class);

	}




}
