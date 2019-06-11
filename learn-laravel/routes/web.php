<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');


Route::get('/todos', 'TodoController@index');
Route::get('/todos/create', 'TodoController@create');
Route::get('/todos/{todo}/edit', 'TodoController@edit');
Route::get('/todos/{todo}', 'TodoController@show');
Route::post('/todos', 'TodoController@store');
Route::patch('/todos/{todo}', 'TodoController@update');
Route::delete('/todos/{todo}', 'TodoController@destroy');

// ВМЕСТО ЭТОГО можно подключить стандартный CRUD

// Route::resourse('/todos', 'TodoController');



// Route::get('/', function () {

//     $tasks = [
//         'Meet with friends',
//         'Cook dinner'
//     ];

//     return view('welcome', [
//         'tasks' => $tasks,
//         'foo' => request('title')
//     ]);
// });


// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/about', function () {
//     return view('about');
// });