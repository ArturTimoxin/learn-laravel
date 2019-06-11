<?php

namespace App\Http\Controllers;

use App\Todo;  

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() {

        // $tasks = [
        //     'Meet with friends',
        //     'Cook dinner'
        // ];

        $tasks = Todo::all();

        // return $todos;

        // return view('todos',[
        //     'tasks' => $tasks,
        // ]);

        // или

        return view('todos.index', compact('tasks'));

    }

    public function create() {

        return view('todos.create');

    }

    public function store() {

        // $todo = new Todo();

        // $todo->todo_title = request('todo_title');
        // $todo->todo_description = request('todo_description');

        // $todo->save();

        // ИЛИ ПРОЩЕ

        // Todo::create([
        //     'todo_title' => request('todo_title'),
        //     'todo_description' => request('todo_description')
        // ]);

        // Todo::create(request()->all());
        Todo::create(request(['todo_title', 'todo_description']));


        return redirect('/todos');

    }

    public function show(Todo $todo) {

        // $todo = Todo::findOrFail($id); 

        return view('todos.show', compact('todo'));
    
    }

    public function edit(Todo $todo) {
        
        // $todo = Todo::findOrFail($id);

        return view('/todos.edit', compact('todo'));
    }

    public function update(Todo $todo) {

        // $todo = Todo::findOrFail($id);

        // $todo->todo_title = request('todo_title');
        // $todo->todo_description = request('todo_description');

        // $todo->save();

        $todo->update(request(['todo_title', 'todo_description']));

        return redirect('/todos');
    }

    public function destroy(Todo $todo) {
        
        // $todo = Todo::findOrFail($id)->delete();

        $todo->delete();

        return redirect('/todos');
    }

}
