<?php

use Application\Core\Router;
use Application\services\RouterService;
//require_once 'src/core/Model.php';
//require_once 'src/core/View.php';
require_once 'src/core/Controller.php';
RouterService::router();
//Router::start(); // запускаем маршрутизатор
