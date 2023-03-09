<?php

namespace Application\api\services;


class UsersService
{
    /**
     * @throws \Exception
     */
    static public function getUsers(): false|string
    {
        header('Content-Type: application/json');
        http_response_code(200);
        return json_encode(DataService::getIds());
    }

    /**
     * @throws \Exception
     */
    static public function getUser($id): false|string
    {
        if (empty(DataService::getUserById($id))) {
            header('Content-Type: application/json');
            http_response_code(404);
            return json_encode(["error:" => "User #$id is not found."]);
        }
        header('Content-Type: application/json');
        http_response_code(200);
        return json_encode(DataService::getUserById($id));
    }
}