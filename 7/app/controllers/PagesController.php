<?php

namespace App\Controllers;

class PagesController {

    public function home() {

        return view('index', []); //require 'views/index.view.php';

    }

    public function about() {

        $company = "QUERTY SOFTWARE";

        return view('about', [
            'company' => $company
        ]);

    }

    public function contact() {

        return view('contact', []);

    }

    public function aboutCulture() {

        return view('about-culture', []);

    }

}