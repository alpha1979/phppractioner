<?php 

require 'vendor/autoload.php';
require 'core/bootstrap.php';
 


// $router = new Router();

// require 'routes.php';
// var_dump($routes);
// $uri = trim($_SERVER['REQUEST_URI'],'/');
// require $router->direct($uri);
// echo '<pre>';
// var_dump($app);
Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
// require 'views/index.view.php';