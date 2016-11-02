<?php

namespace Blog;

use Blog\Categories;
use Blog\CategoriesFactory;
use Blog\Controller\BlogController;

return [
    'router' => [
        'routes' => [
            'home' => [
                'type' => 'Literal',
                'options' => [
                    'route'    => '/blog',
                    'defaults' => [
                        'controller' => BlogController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'invokables' => [
            BlogController::class => BlogController::class
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
    'service_manager' => [
    	'services' => [
    		'categories' => [
    			'PHP', 
    			'Zend Framework',
    			'Symphony',
    			'Laravel'
    		],
    	],
    	'invokables' => [
    		#Categories::class => Categories::class
    	],
    	'factories' => [
    		Categories::class => CategoriesFactory::class
    	],
    ],
];