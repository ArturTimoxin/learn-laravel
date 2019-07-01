<?php

namespace App\Listeners;

use App\Mail\TodoCreated as TodoCreatedMail;
use App\Events\TodoCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Support\Facades\Mail;


class SendTodoCreatedNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  TodoCreated  $event
     * @return void
     */
    public function handle(TodoCreated $event)
    {
        Mail::to($event->todo->owner->email)->send(
            new TodoCreatedMail($event->todo)
        );
    }
}
