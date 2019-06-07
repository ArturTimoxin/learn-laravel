<?php

// $router->define([
//     '' => 'controllers/index.php',
//     'about' => 'controllers/about.php',
//     'about/culture' => 'controllers/about-culture.php',
//     'contact' => 'controllers/contact.php',
//     'names' => 'controllers/add-name.php'
// ]);

// вместо того чтобы 

// $router->define('','contollers/index.php');

// или

// Router::get('about', 'controllers/about.php')

//////////////////////////////////////////////


// $router->get('', 'controllers/index.php');
// $router->get('about', 'controllers/about.php');
// $router->get('contact', 'controllers/contact.php');
// $router->get('about/culture', 'controllers/about-culture.php');
// $router->post('names', 'controllers/add-name.php'); // т.о. этот роут доступен только для записи, но не для чтения!

// какие есть роуты (зарегестрированные)

// echo '<pre>';
// var_dump($router->routes);
// echo '</pre>';

//////////////////////////////////////////////
//
// Т.к. используем PagesController можно писать так:

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('about/culture', 'PagesController@aboutCulture');
$router->get('users', 'UsersController@index'); 
$router->post('users', 'UsersController@store'); // т.о. этот роут доступен только для записи, но не для чтения!


