<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin(
    'CakeTaxonomy',
    ['path' => '/cake-taxonomy'],
    function (RouteBuilder $routes) {
        $routes->fallbacks(DashedRoute::class);
        $routes->prefix('admin', function ($routes) {
            $routes->fallbacks(DashedRoute::class);
        });
    }
);
