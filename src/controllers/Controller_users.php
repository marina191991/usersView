<?php
//http://0.0.0.0:801/user/profile
namespace Application\controllers;

use Application\Core\Controller;

class Controller_users extends Controller
{
    /**
     * @param int $param
     * @return void
     */
    public function action_profile(int $param = 0): void
    {
        $this->view->getProfile($param);
    }

}