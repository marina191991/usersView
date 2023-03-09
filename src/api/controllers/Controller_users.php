<?php

namespace Application\api\controllers;

use Application\api\services\UsersService;

class Controller_users
{
    /**
     * @param $param
     * @throws \Exception
     */
    public function __construct($param = null)
    {
        if (!empty($param)) {
            $this->getUser($param);
        } else
            $this->getUsers();
    }

    /**
     * @return void
     * @throws \Exception
     */
    public function getUsers(): void
    {
        echo UsersService::getUsers();

    }

    /**
     * @param $param
     * @return void
     * @throws \Exception
     */
    public function getUser($param): void
    {
        echo UsersService::getUser($param);
    }
}