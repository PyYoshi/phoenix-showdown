<?php

use Phalcon\Mvc\Micro;

error_reporting(E_ALL);

define('APP_PATH', realpath('..'));

try {
    $config = include __DIR__ . "/../config/config.php";
    include APP_PATH . '/config/services.php';
    $app = new Micro($di);
    include APP_PATH . '/app.php';
    $app->handle();
} catch (\Exception $e) {
    echo $e->getMessage();
}
