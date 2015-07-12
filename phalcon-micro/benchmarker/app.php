<?php
/**
 * Local variables
 * @var \Phalcon\Mvc\Micro $app
 */

/**
 * http://127.0.0.1:3000/showdown
 */
$app->get('/{title}', function ($title) use ($app) {
    $app['view']->title = $title;
    $app['view']->members = [
        ['name' => 'Chris McCord'],
        ['name' => 'Matt Sears'],
        ['name' => 'David Stump'],
        ['name' => 'Ricardo Thompson'],
    ];
    $app['view']->render('index','index');
});
