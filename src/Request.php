<?php

namespace App;

class Request
{
    public function getUri()
    {
        return parse_url($_SERVER['Request_URI'], PHP_URL_PATH);
    }

    public function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
