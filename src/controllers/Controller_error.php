<?php

namespace Application\controllers;

use Application\Core\Controller;

class Controller_error extends Controller
{
public function action_Error404(): void {
    $this->view->getError404View();
}
}