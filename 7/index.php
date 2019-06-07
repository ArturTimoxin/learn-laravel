<?php

// define (DB_DRIVER,  "mysql");
// define (DB_CHARSET, "UTF8");
// define (DB_HOST,    "127.0.0.1");
// define (DB_USER,    "root");
// define (DB_PASS,    "212324");
// define (DB_NAME,    "my_new_db");

require 'vendor/autoload.php'; // загружает все классы, которые указаны в composer.json - "autoload"

require 'core/bootstrap.php';

/////////////////////////
// use App\Core\Router;
// use App\Core\Request;
/////////////////////////

// ИЛИ

use App\Core\{Router, Request}; // появилось в PHP 7

Router::load('app/routes.php')->direct(Request::uri(), Request::method());

// echo '<pre>';
// var_dump($_SERVER["REQUEST_URI"]); // возвращает данные запроса
// echo '</pre>';

// $tasks = array_map(function ($task) { // map php

//     return $task->description;

// }, $tasks);

// var_dump($tasks);
// $results = $statement->fetchAll(PDO::FETCH_OBJ); // превратить в норм объект с данными

// var_dump($results[0]->description);

// var_dump($tasks[0]->foobar()); // типа запихнуть функцию в эти объекты