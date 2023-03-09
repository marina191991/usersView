<?php

namespace Application\Core;

use Application\controllers\Controller_error;

class Router
{
    /**
     * @return void
     */
    static function start(): void
    {
        // контроллер и действие по умолчанию
        $controller_name = 'index';
        $action_name = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);
        // получаем имя контроллера
        if (!empty($routes[1])) {
            $controller_name = $routes[1];
        }

        // получаем имя экшена
        if (!empty($routes[2])) {
            $action_name = $routes[2];
        }
        if (!empty($routes[3])) {
            $param = $routes[3];
        }

        // добавляем префиксы
        $controller_name = 'Controller_' . $controller_name;
        $action_name = 'action_' . $action_name;
        $controller_class = 'Application\Controllers\\' . $controller_name;

        if (class_exists($controller_class)) {
            // создаем контроллер
            $controller = new $controller_class();
            $action = $action_name;

        } else {
            $controllerError = new Controller_error;
            $controllerError->action_Error404();
        }


        if (method_exists($controller, $action)) {
            // вызываем действие контроллера
            if (!empty($param)) {
                $controller->$action($param);
            } else {
                $controller->$action();
            }
        } else {
            $controllerError = new Controller_error;
            $controllerError->action_Error404();
        }

    }


}