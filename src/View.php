<?php

namespace App;

class View
{
    public function render($viewName, $data = [])
    {
        extract($data);
        include __DIR__ . '/../views/' . $viewName . '.php';
    }
}
