<?php

namespace Application\Controllers;

use Application\Core\Controller;
use Application\services\DataService;
use Application\Services\ViewService;

class Controller_index extends Controller
{
    /**
     * @throws \Exception
     */
    public function action_index()
    {
       // DataService::getUserFIO();
        $this->view ->getIndexView();
    }

}
