<?php

namespace App\Core;

use Exception;

class Controller
{
    public function execute(string $router)
    {
        if (!str_contains($router, '@')) {
            throw new Exception("A rota está registrada com o formato errado");
            
        }

        list($controller, $method) = explode('@', $router);

        $controllerNamespace = "App\Controllers\\$controller";

        if(!class_exists($controllerNamespace)){
            throw new Exception("O controller $controller não existe");
        }

        $controller = new $controllerNamespace();

        if(!method_exists($controller,$method)){
            throw new Exception("O metodo $method não existe no controller $controller", 1);
            
        }
        $controller->$method();

    }
}
