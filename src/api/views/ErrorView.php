<?php

namespace Application\api\views;

class ErrorView
{
    /**
     * @return string|false
     */
    static function error(): string|false
    {
        header('Content-Type: application/json');
        http_response_code(404);
        return json_encode(["error" => "Route is not found."]);
    }
}