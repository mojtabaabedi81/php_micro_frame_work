<?php

namespace App;

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
}
