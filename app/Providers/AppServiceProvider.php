<?php

namespace App\Providers;

use League\Container\ServiceProvider\AbstractServiceProvider;	

class AppServiceProvider extends AbstractServiceProvider
{
	protected $provides = [
		'DB'
	];
	public function register()
	{
		$container = $this->getContainer();

		$container->share('DB' , function() {
			echo 'it works';
		});


	}
	
	


}
