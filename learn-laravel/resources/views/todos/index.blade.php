@extends('layout')

@section('content')
    <h1>My todo list:</h1>

    <ul>
        @foreach ($tasks as $task)

        <li>
            <a href="/todos/{{ $task->todo_id }}">
                {{ $task->todo_title }}
            </a>
        </li>

        @endforeach
    </ul>

    <a href="/todos/create"><button>New TODO</button></a>
@endsection