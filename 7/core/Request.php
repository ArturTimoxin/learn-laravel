<?php

namespace App\Core;

class Request {

    public static function uri() {

        
        // удаляет пробелы или символы во к-е указаны во 2м аргументе

        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        ); 
    }

    public static function method() {

        return $_SERVER['REQUEST_METHOD'];

    }

}