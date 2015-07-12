<?php

defined('APP_PATH') || define('APP_PATH', realpath('.'));

return new \Phalcon\Config([
    'application' => [
        'viewsDir'       => APP_PATH . '/views/',
        'cacheDir'       => APP_PATH . '/cache/',
        'baseUri'        => '/',
    ]
]);
