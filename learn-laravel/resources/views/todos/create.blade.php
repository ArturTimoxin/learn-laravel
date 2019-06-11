@extends('layout')

@section('content')
    <h1>Create a new todo for me:</h1>

    <form method="POST" action="/todos">
        {{ csrf_field() }}
        <input type="text" name="todo_title" placeholder="Title" />
        <br>
        <textarea name="todo_description" placeholder="Description"></textarea>
        <br>
        <button type="submit">Create TODO</button>
    </form>

@endsection