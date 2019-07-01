@extends('layout')

@section('content')
    <h1>My todo list:</h1>

    <ul>
        @foreach ($todos as $todo)

        <li>
            <a href="/todos/{{ $todo->id }}">
                {{ $todo->todo_title }}
            </a>
        </li>

        @endforeach
    </ul>

    <a href="/todos/create"><button>New TODO</button></a>
@endsection