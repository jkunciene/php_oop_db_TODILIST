<?php

$router->define([
    'todo_oop_db' => 'controllers/home.php',
    'todo_oop_db/new-task' => 'controllers/new-task.php',
    'todo_oop_db/edit-task' => 'controllers/edit-task.php',
    '404'=>'controllers/404.php'
]);
