<?php

namespace App\Http\Controllers;

use App\Todo;
use App\Services\Twitter;  
use App\Events\TodoCreated;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function __construct() {

        $this->middleware('auth'); // ->except(['show']); - не авторизированным пользователям можно просматривать задачи

    }

    public function index() {

        // auth()->id(); // id user
        // auth()->user(); // get User
        // auth()->check(); // check user is login - boolean
        // auth()->guest(); // check user is guest

        // $tasks = Todo::where('owner_id', auth()->id())->get();
        // or

        // $todos = auth()->user()->todos;

        // return view('todos.index', compact('todos'));

        // or

        return view('todos.index', [
            // get all todos for the auth'd user 
            'todos' => auth()->user()->todos
        ]);

    }

    public function create() {

        return view('todos.create');

    }

    public function store() {

        $attributes = $this->validateTodo();

        $attributes['owner_id'] = auth()->id();

        $todo = Todo::create($attributes);

        // event(new TodoCreated($todo));

        return redirect('/todos');

    }

    public function show(Todo $todo) {

        // if($todo->owner_id !== auth()->id()) {
        //     abort(403); // not autorized for this page
        // }
        // or
        // abort_if($todo->owner_id !== auth()->id(), 403);
        // or
        // abort_unless(auth()->user()->owns($todo), 403);
        // OR
        // if(\Gate::denies('update', $todo)) {
        //     abort(403);
        // }
        // OR
        // abort_if(\Gate::denies('update', $todo), 403);
        // OR
        // abort_unless(\Gate::allows('update', $todo), 403);

        // или используем Policy

        $this->authorize('view', $todo);

        return view('todos.show', compact('todo'));
    
    }

    public function edit(Todo $todo) {

        return view('/todos.edit', compact('todo'));

    }

    public function update(Todo $todo) {

        $todo->update(request($this->validateTodo()));

        return redirect('/todos');
    }

    public function destroy(Todo $todo) {

        $this->authorize('destroy', $todo);
        
        $todo->delete();

        return redirect('/todos');
    }

    public function validateTodo() {

        return request()->validate([
            'todo_title' => ['required', 'min:3', 'max:255'],
            'todo_description' => ['required', 'min:3']
        ]);

    }

}
