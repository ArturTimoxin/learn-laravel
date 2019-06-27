<?php

namespace App\Http\Controllers;

use App\Todo;
use App\Services\Twitter;  

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() {

        $tasks = Todo::all();

        return view('todos.index', compact('tasks'));

    }

    public function create() {

        return view('todos.create');

    }

    public function store() {

        $validated = request()->validate([
            'todo_title' => ['required', 'min:3', 'max:255'],
            'todo_description' => ['required', 'min:3']
        ]);

        Todo::create($validated);

        return redirect('/todos');

    }

    public function show(Todo $todo) {

        return view('todos.show', compact('todo'));
    
    }

    public function edit(Todo $todo) {

        return view('/todos.edit', compact('todo'));

    }

    public function update(Todo $todo) {

        $todo->update(request(['todo_title', 'todo_description']));

        return redirect('/todos');
    }

    public function destroy(Todo $todo) {
        
        $todo->delete();

        return redirect('/todos');
    }

}
