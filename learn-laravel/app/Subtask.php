<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtask extends Model
{
    protected $guarded = [];

    public function complete($completed = true)
    {
        $this->update(compact('completed'));
    }

    public function incomplete()
    {
        $this->complete(false);
    }

    public function todo() {

        return $this->belongsTo(Todo::class); // показать от какого Todo эта подзадача

    }

}
