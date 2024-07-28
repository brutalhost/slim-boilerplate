<?php

use App\Http\Controllers\HomeController;
use Slim\App;

return function (App $app) {
    $app->get('/', [HomeController::class, 'index']);
    $app->get('/hello/{name}', [HomeController::class, 'index']);
};