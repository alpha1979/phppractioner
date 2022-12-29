<?php 

if (isset($_POST['name'])) {
    App::get('database')->insertName('task', [
       'description' => $_POST['name'],
       'completed' => 0
    ]);
   
}

header('Location: /');

