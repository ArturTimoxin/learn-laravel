<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Facades\Mail;
use App\Events\TodoCreated;


class Todo extends Model
{
    protected $fillable = [
        'todo_title', 'todo_description', 'owner_id'
    ];

    protected $dispatchesEvents = [
        'created' => TodoCreated::class
    ];

    // public static function boot() { // выполнить после создания модели
        
    //     parent::boot();

    //     static::created(function ($todo) { // runnig when model will be created
    //         // Mail::to($todo->owner->email)->send(
    //         //     new TodoCreated($todo)
    //         // );
    //     });

    // }

    public function owner() {
        
        return $this->belongsTo(User::class);

    }

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
