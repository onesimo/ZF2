<?php

namespace Blog;

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
];