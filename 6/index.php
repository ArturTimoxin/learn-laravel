<?php

class Task {

    protected $description;

    protected $completed = false;

    public function __construct($description) {
        // конструктор класса

        $this->description = $description;
    }

    public function complete() {
        $this->completed = true;
    }

    public function isComplete() {
        return $this->completed;
    }

    public function getDescrtiption() {
        return $this->description;
    }

};

// $task = new Task('Go to the store!'); // объект класса

// $task->complete(); // вызов метода класса

// var_dump($task->isComplete());

$tasks = [
    new Task('Go to the store!'),
    new Task('Finish this lesson!'),
    new Task('Go to home!')
];


require 'index.view.php';

