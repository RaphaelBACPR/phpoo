<?php

namespace App\Core;

use App\Core\Controller;
use App\Core\RoutersFilter;
use Exception;

class Router
{
    public static function run()
    {
        try{
        $routerRegistered = new RoutersFilter;
        $router = $routerRegistered->get();

        $controller = new Controller;
        $controller->execute($router);
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
}

