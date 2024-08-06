<?php
require '../helper.php';
require_once '../vendor/autoload.php';

use App\App;
use App\Router;


$app = new App();
$router = new Router($app);

$router->get('/', 'Controllers\HomeController@index');
$router->get('/hello', 'Controllers\HomeController@hello');

$request = $app->getRequest();
$response = $router->dispatch($request);

echo $response;
