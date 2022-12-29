<?php 
require 'core/Task.php';

$tasks = App::get('database')->selectAll('task');

// $task[0]->isCompleted();
// echo 'hello';
// echo phpinfo();
// json_encode($tasks);
require 'views/index.view.php';