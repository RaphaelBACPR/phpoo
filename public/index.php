<?php

use App\Core\Router;

require "../vendor/autoload.php";

session_start();

// dd($_SERVER);

Router::run();