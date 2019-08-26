<?php

namespace App\Views;

use Twig\Environment;
use Zend\Diactoros\Response;
use Psr\Http\Message\ResponseInterface;


class View 
{
	protected $twig; 
	protected $response;

	// TODO : make abstraction for view template engine


	public function __construct(Environment $twig ,ResponseInterface $response)
	{
		$this->twig = $twig ; 
		$this->response = $response;
	}


	public function render($view , $data = [])
	{

		$this->response->getBody()->write(
			$this->twig->render($view , $data)
		);
		return $this->response ;
	}
}
