@extends('layout')

@section('content')
    <h1>Create a new todo for me:</h1>
        
    <form method="POST" action="/todos">

        @csrf

        <div class="form-group">
            <label for="todo_title">Title TODO:</label>
            <div class="controll">
                <input 
                    type="text" 
                    class="form-control border {{ $errors->has('todo_title') ? 'border-danger' : '' }}" 
                    name="todo_title" 
                    value="{{ old('todo_title') }}"
                    placeholder="Title"
                >
            </div>
        </div>
        <div class="form-group">
            <label for="todo_description">Description TODO:</label>
            <div class="controll">
                <textarea 
                    type="text" 
                    class="form-control border {{ $errors->has('todo_description') ? 'border-danger' : '' }}" 
                    name="todo_description" 
                    placeholder="Description"
                >{{ old('todo_description') }}</textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="controll">
                <button type="submit" class="btn btn-success">Create TODO</button>
            </div>
        </div>

        @include('errors')

    </form>

@endsection