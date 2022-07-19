<?php

namespace App\Routes;

class Routes
{
    public static function get()
    {
        return [
            'get' => [
                '/' => "Home@index",
                '/user/[0-9]+' => "User@index"
            ],
            'post'=> []
        ];
    }
}
