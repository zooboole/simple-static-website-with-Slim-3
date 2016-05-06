<?php

	// Creating routes
	
	// Psr-7 Request and Response interfaces
	use Psr\Http\Message\ServerRequestInterface as Request;
	use Psr\Http\Message\ResponseInterface as Response;



	// HOME ROUTE
	// 
	$app->get('/', function (Request $request, Response $response, $args)   {

		$vars = [
			'page' => [
			'title' => 'Welcome - Alpha Inc.',
			'description' => 'Welcome to the official page of Alpha Inc.'
			],
		];	


		return $this->view->render($response, 'home.twig', $vars);

	})->setName('home');




	// ABOUT ROUTE
	// 
	$app->get('/about', function (Request $request, Response $response, $args)   {

		$vars = [
			'page' => [
			'title' => 'About Us - Alpha Inc.',
			'description' => 'We\'re a multi-national company specialized in high tech and robotics.'
			],
		];	

		return $this->view->render($response, 'about.twig', $vars);

	})->setName('about');





	// ABOUT ROUTE
	// 
	$app->get('/contact', function (Request $request, Response $response, $args)   {

		$vars = [
			'page' => [
			'title' => 'About Us - Alpha Inc.',
			'description' => 'Drop us a line or get in touch for any enquires.'
			],
		];	

		return $this->view->render($response, 'contact.twig', $vars);

	})->setName('contact');