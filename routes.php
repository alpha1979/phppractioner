<?php 

// $routes = [
//     '' => 'controllers/index.php',
//     'about' => 'controllers/about.php',
//     'about/culture' => 'controllers/about-culture.php',
//     'contact' => 'controllers/contact.php'
// ];
// $router->define([
//     '' => 'controllers/index.php',
//     'about' => 'controllers/about.php',
//     'about/culture' => 'controllers/about-culture.php',
//     'contact' => 'controllers/contact.php',
//     'names' => 'controllers/add-name.php'
// ]);

$router->get('', 'PageController@index');
$router->get('about', 'PageController@about');
$router->get('contact', 'PageController@contact');
// $router->get('about/culture', 'controllers/about-culture.php');
// $router->post('names', 'controllers/add-name.php');

// var_dump($router->routes);