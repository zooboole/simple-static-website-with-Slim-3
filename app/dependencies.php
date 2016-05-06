<?php

	// Get the container
	$container = $app->getContainer();



	// Twig view dependency
	$container['view'] = function ($c) {

		$cf = $c->get('settings')['view'];
		$view = new \Slim\Views\Twig($cf['path'], $cf['twig']);
		$view->addExtension(new \Slim\Views\TwigExtension(
			$c->router,
			$c->request->getUri()
		));

		return $view;
	};
