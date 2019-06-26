<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'todo_title', 'todo_description'
    ];

    public function subtasks() {

        return $this->hasMany(Subtask::class); // показать какие подзадачи у этой задачи

    }

    public function addSubtask($subtask) {

        $this->subtasks()->create($subtask); // add todo_id automaticly

        // return Subtask::create([
        //     'todo_id' => $this->id,
        //     'description' => $description
        // ]);

    }

}
