<?php

use App\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return $this->render('home', ['message' => 'Hello world!']);
    }

    public function hello()
    {
        return $this->render('hello', ['message' => 'hello to the moon and back again']);
    }
}
