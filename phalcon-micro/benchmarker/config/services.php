<?php
/**
 * Services are globally registered in this file
 *
 * @var \Phalcon\Config $config
 */

$di = new \Phalcon\Di\FactoryDefault();

$di->setShared('view', function () use ($config) {
    $view = new \Phalcon\Mvc\View();
    $view->setViewsDir($config->application->viewsDir);
    $view->registerEngines([
        '.volt' => function($view, $di) use ($config) {
            $volt = new \Phalcon\Mvc\View\Engine\Volt($view, $di);
            $volt->setOptions(
                [
                    'compiledPath'      => $config->application->cacheDir,
                    'compiledExtension' => '.php',
                    'compiledSeparator' => '_',
                ]
            );
            return $volt;
        }
    ]);
    return $view;
});

$di->set('url', function () use ($config) {
    $url = new \Phalcon\Mvc\Url();
    $url->setBaseUri($config->application->baseUri);
    return $url;
});
