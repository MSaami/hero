<?php

namespace App\Providers;

use League\Container\ServiceProvider\AbstractServiceProvider;	
use App\Views\View;

class ViewServiceProvider extends AbstractServiceProvider
{
	protected $provides = [
		View::class
	];

	public function register()
	{
		$container = $this->getContainer();

		$container->share(View::class , function() use ($container){
			$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/../../views');
			$twig = new \Twig\Environment($loader, [
				'cache' => false
			]);

			return new View($twig , $container->get('response'));
		});





	}




}
