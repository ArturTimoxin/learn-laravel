@extends('layout')

@section('content')
    <h1>{{ $todo->todo_title }}</h1>
    <p>{{ $todo->todo_description }}</p>

    <a href="/todos/{{ $todo->id }}/edit">
        <button type="button" class="btn btn-info">Edit TODO</button>
    </a>

    @if($todo->subtasks->count())
        <div class="card shadow p-3 mb-5 bg-white rounded">
            <p>Subtasks:</p>
                @foreach ($todo->subtasks as $subtask)
                <div>
                    <form method="POST" action="/subtasks/{{ $subtask->id }}">
                        @method('PATCH')
                        @csrf
                        <label class="checkbox {{ $subtask->completed ? 'is-complete' : '' }}" for="completed">
                            <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $subtask->completed ? 'checked' : '' }}>
                            {{ $subtask->description  }}
                        </label>
                    </form>
                </div>
                @endforeach
        </div>
    @endif
    
    <!-- add a new subtask -->

    <form method="POST" action="/todos/{{ $todo->id }}/subtasks" class="card shadow p-3 mb-5 bg-white rounded">
        @csrf
        <div class="form-group">
            <label for="description">New Subtask</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Enter description">
        </div>
        <button type="submit" class="btn btn-primary">Add new subtask</button>
    </form>

    @include('errors')
    

@endsection