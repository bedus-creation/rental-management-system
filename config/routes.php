<?php

use App\Controller\Front\PageController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    $routes->add('homepage', '/')
        ->controller([PageController::class, 'index']);
    $routes->add('detail', '/home')
        ->controller([PageController::class, 'index']);
};
