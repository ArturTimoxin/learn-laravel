<?php

use App\Services\Twitter;
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

// singleton container

// app()->singleton('App\Services\Twitter', function () {
    
//     return new Twitter('lololo');
// });

//////////////////////////

Route::get('/', function (Twitter $twitter) {

    // dd($twitter);

    return view('welcome');
});

// Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');


// Route::get('/todos', 'TodoController@index');
// Route::get('/todos/create', 'TodoController@create');
// Route::get('/todos/{todo}/edit', 'TodoController@edit');
// Route::get('/todos/{todo}', 'TodoController@show');
// Route::post('/todos', 'TodoController@store');
// Route::patch('/todos/{todo}', 'TodoController@update');
// Route::delete('/todos/{todo}', 'TodoController@destroy');

// ВМЕСТО ЭТОГО можно подключить стандартный CRUD - resourse

Route::resource('todos', 'TodoController');
Route::patch('/subtasks/{subtask}', 'TodoSubtasksController@update');
Route::post('todos/{todo}/subtasks', 'TodoSubtasksController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
