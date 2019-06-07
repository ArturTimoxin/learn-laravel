<?php

// WORK WITH ARRAYS

class Post 

{
    public $title;

    public $published;


    public function __construct($title, $published) {

        $this->title = $title;
        $this->published = $published;

    }
}

$posts = [
    new Post('New Post 1', true),
    new Post('New Post 2', true),
    new Post('New Post 3', false),
    new Post('New Post 4', true),
];


////////////
// filter in PHP
////////////


// $unpublishedPosts = array_filter($posts, function ($post) {

//     return !$post->published;

// });

// 

// var_dump($unpublishedPosts); // posts with 'published' = false;

//

///////////
// map in PHP array_map(callback, array);
///////////

// $arr1 = array_map(function($post) {

//     $post->published = true;

//     return $post; // вернуть новый массив

// }, $posts);


// $arr1 = array_column($posts, 'title'); // получить свойства title в массив

///////////////
// forEach in PHP
///////////////

// превратили свойста в массив

foreach($posts as $index => $post) {

    $posts[$index] = (array) $post;

}

echo '<pre>';
var_dump($posts);
echo '</pre>';