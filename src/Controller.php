<?php

namespace App;


class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    protected function render($viewName, $data = [])
    {
        $this->view->render($viewName, $data);
    }
}
