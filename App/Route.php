<?php

namespace App;

class Route
{
    public function initRoutes()
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
    }

    public function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}
