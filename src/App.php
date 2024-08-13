<?php

namespace App;

use PDO;

class App
{
    protected $request;

    public function __construct()
    {
        $this->request = new Request();
    }

    public function getRequest()
    {
        return $this->request;
    }

    public static function getPdo()
    {
        return  new PDO('mysql:host = localhost; dbname = micro_frame_work', 'root', '');
    }
}
