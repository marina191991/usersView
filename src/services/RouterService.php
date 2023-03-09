<?php

namespace Application\services;

use Application\Core\Router;
use Application\core\RouterAPI;

class RouterService
{
    static public function router(): void
    {
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        if ($routes[1] == 'api') {
            RouterAPI::start();
        } else Router::start();
    }
}