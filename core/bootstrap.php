<?php 

// $app = [];

App::bind('config', require 'config.php');


App::bind('database', new QueryBuilder(
    Database::connect(App::get('config')['database'])
));


function view($name, $data = [])
{
    extract($data);
    require "views/{$name}.view.php";
}