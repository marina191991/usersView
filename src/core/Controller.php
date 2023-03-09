<?php

namespace Application\Core;

use Application\Services\ViewService;

class Controller
{
    protected ViewService $view;

    public function __construct()
    {
        $this->view = new ViewService();
    }

}