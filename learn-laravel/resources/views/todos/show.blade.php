@extends('layout')

@section('content')
    <h1>{{ $todo->todo_title }}</h1>
    <p>{{ $todo->todo_description }}</p>
    <a href="/todos/{{ $todo->todo_id }}/edit">
        <button type="button" class="btn btn-info">Edit TODO</button>
    </a>
@endsection