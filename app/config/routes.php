<?php
# ./app/config/routes.php

use App\Provider\HelloControllerProvider;

$app->mount('/hello', new HelloControllerProvider());

$app->get('/', function () use ($app) {
    return $app->redirect($app['url_generator']->generate('GET_hello_name', [
        'name' => 'World'
    ]));
});