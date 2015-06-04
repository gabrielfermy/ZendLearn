<?php
return array(
	'service_manager' => array(
		'invokables' => array(
			'Blog\Service\PostServiceInterface' => 'Blog\Service\PostService',
		)
	),
	'controllers'  => array(
		'factories' => array(
			'Blog\Controller\List' => 'Blog\Factory\ListControllerFactory',
		)
	),
	'router'       => array(
		// Open configuration for all possible routes
		'routes' => array(
			// Define a new route called "post"
			'post' => array(
				// Define the routes type to be "Zend\Mvc\Router\Http\Literal", which is basically just 11
				'type'    => 'literal',
				// Configure the route itself
				'options' => array(
					// Listen to "/blog" as uri
					'route'    => '/blog',
					// Define default controller and action to be called when this route is matched
					'defaults' => array(
						'controller' => 'Blog\Controller\List',
						'action'     => 'index',
					)
				)
			)
		)
	),
	'view_manager' => array(
		'template_path_stack' => array(
			__DIR__ . '/../view/',
		),
	),


);