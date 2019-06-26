<?php

namespace App\Http\Controllers;

use App\Subtask;
use App\Todo;


class TodoSubtasksController extends Controller
{
    public function store(Todo $todo)
    {
        $attributes = request()->validate(['description' => 'required']);
        $todo->addSubtask($attributes);

        return back();

    }

    public function update(Subtask $subtask)
    {
        
        // dd($subtask);
        // $subtask->update([
        //     'completed' => request()->has('completed')
        // ]);

        // $subtask->complete(request()->has('completed'));

        $method = request()->has('completed') ? 'complete' : 'incomplete';

        $subtask->$method();

        return back();
    }
}
