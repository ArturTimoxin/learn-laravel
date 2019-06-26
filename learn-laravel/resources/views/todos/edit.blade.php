@extends('layout')

@section('content')
    <h1 class="title">Edit project:</h1>

    <form method="POST" action="/todos/{{ $todo->id }}" class="edit-todo-form">

        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="todo_title">Title TODO:</label>
            <div class="controll">
                <input type="text" class="form-control" name="todo_title" placeholder="Title" value="{{ $todo->todo_title }}">
            </div>
        </div>
        <div class="form-group">
            <label for="todo_description">Description TODO:</label>
            <div class="controll">
                <textarea type="text" class="form-control" name="todo_description" placeholder="Description">{{ $todo->todo_description }}</textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="controll">
                <button type="submit" class="btn btn-primary">Update TODO</button>
            </div>
        </div>
    </form>

    <form method="POST" action="/todos/{{ $todo->id }}">

        @method('DELETE')
        @csrf
        
        <div class="form-group">
            <div class="controll">
                <button type="submit" class="btn btn-danger">DELETE TODO</button>
            </div>
        </div>
    </form>

    @include('errors')
    
@endsection