<?php
// ассоциативные массивы

// $person = [
//     31, 'brown'
// ]

$person = [
    'age' => 31,
    'hair' => 'brown',
    'career' => 'web developer',
    'married' => true, 
];

$person['name'] = 'Artur'; // добавить что то в массив

// die('hellow world!'); // типа убрать все

// var_dump($person); // типа console.log()

// unset($person['age']); // удалить из ассоц массива эл-т

require 'index.view.php';