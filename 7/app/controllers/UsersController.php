<?php

namespace App\Controllers;

use App\Core\App;

class UsersController {

    public function index() {

        $users = App::get('database')->selectAll('users', 'User');

        return view('users', [
            'users' => $users,
        ]);

    }

    public function store() {

        // вставка юзера который ассоциируется с запросом
        // и потом вернуть всех юзеров

        App::get('database')->insert('users', [
            'user_name' => $_POST['name'],
        ]);
        
        return redirect('users');

    }

}