<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class TodoCreated
{
    use Dispatchable, SerializesModels;

    public $todo;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($todo)
    {   
        $this->todo = $todo;
    }

}
