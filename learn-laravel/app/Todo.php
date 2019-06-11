<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //

    protected  $primaryKey = 'todo_id';

    // те поля которые будут заполнятся в БД

    protected $fillable = [
        'todo_title', 'todo_description'
    ];
}
