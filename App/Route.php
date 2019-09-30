<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap
{
    protected function initRoutes()
    {
        // Routes
        $routes['home'] = array(
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        );

        $routes['sobre-nos'] = array(
            'route' => '/sobre-nos',
            'controller' => 'indexController',
            'action' => 'sobreNos'
        );

        $this->setRoutes($routes);
    }
}
