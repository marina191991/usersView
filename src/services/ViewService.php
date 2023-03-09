<?php

namespace Application\Services;
class

ViewService
{
    /**
     * @return void
     */
    function getIndexView(): void
    {
        include "src/views/indexView.php";
    }

    /**
     * @return void
     */
    function getError404View(): void
    {
        include "src/views/error404View.php";
    }

    /**
     * @param int $param
     * @return void
     * @throws \Exception
     */
    function getProfile(int $param): void
    {
        $user = \Application\services\DataService::getUserById($param);
        if (!empty($user)) {
            include "src/views/userView.php";
        } else {
            $this->getError404View();
        }
    }
}