<?php

namespace Application\core;

use Application\api\views\ErrorView;

class RouterAPI
{
    /**
     * @return void
     */
    static public function start(): void
    {
        $controller_name = "";
        $router = explode('/', $_SERVER['REQUEST_URI']);
        if (!empty($router[2])) {
            $controller_name = $router[2];
        }

        if (!empty($router[3])) {
            $param = $router[3];
        }
        $controller_name = 'Controller_' . $controller_name;
        $controller_class = 'Application\api\controllers\\' . $controller_name;
        if (class_exists($controller_class)) {
            if (!empty($param)) {
                new  $controller_class($param);
            } else {
                new  $controller_class();
            }
        } else {
            echo ErrorView::error();
        }
    }

}