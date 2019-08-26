<?php

namespace App\Controllers;

use App\Views\View;


class HomeController
{
	private $view;

	public function __construct(View $view)
	{
		$this->view = $view;
	}



	public function index($request)
	{
		return $this->view->render('home.twig' , ['name' => 'Mehrdad']);
	}


	

}
