<?php

use App\Http\Middlewares\CorsMiddleware;
use Slim\App;


return function (App $app) {
    $app->addBodyParsingMiddleware();
    $app->addRoutingMiddleware();
    $app->addErrorMiddleware(true, true, true);
    $app->add(new CorsMiddleware($app->getResponseFactory()));
};
