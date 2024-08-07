<?php

// include the helper.php in the project to use the functions 
require '../helper.php';
// include the autoloader to use the anme spaces and other composer options
require_once '../vendor/autoload.php';

// use the App
use App\App;
// use the Router
use App\Router;

//make the object from the App(in the App object we have access to Request) .
$app = new App();


/*make the object from the Router to get the routes (in the app()->getRequest() we can have access to .
$_SERVER['REQUEST_METHOD'] & $_SERVER['REQUEST_URI'] )
*/
$router = new Router($app->getRequest());


//RoutesList (in the first parameter we pass the uri and in the 2nd we pass the controller and methods) .
$router->get('/', 'HomeController@index');
$router->get('/hello', 'HomeController@hello');

//get the request which from server came and put it in the request varriable .
$request = $app->getRequest();

//dispatch the request(which came from server)
$response = $router->dispatch($request);

// return the response
echo $response;
