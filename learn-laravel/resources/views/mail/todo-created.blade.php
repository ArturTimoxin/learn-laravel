@component('mail::message')
# New TODO!

Your new todo {{ $todo->todo_title }} was created!

{{ $todo->todo_description }}

@component('mail::button', ['url' => url('/todos', $todo->id)])
View TODO
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
