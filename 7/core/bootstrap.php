<?php

use App\Core\App; // взять из пространства имен класс App

App::bind('config', require 'config.php');

$config = App::get('config');

/////////////////////////////////

/// App - dependency enjection comtainer

// App::bind('foo', 'bar');

// die(App::get('foo')); // - return bar

/////////////////////////////////

// echo '<pre>';

// die(var_dump($config));

// echo '</pre>';

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

/////////////////
// это заменяет composer/autoload!

// require 'core/Router.php';
// require 'core/Request.php';
// require 'core/database/Connection.php';
// require 'core/database/QueryBuilder.php';


///////////////

// $config = require 'config.php'; - это неудобно, не масштабирруемо

// $query = new QueryBuilder(Connection::make($config['database']));


function view($name, $data) {

    // extract - делает из этого ['name' => 'joe', 'age' => 25]
    // это $name = 'joe'; $age = 25;

    extract($data); 
    
    return require "app/views/{$name}.view.php";

}


function redirect($path) {

    // redirect to page: example  - header('Location: /users');

    header("Location: {$path}");

}