<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__ . '/../bootstrap/app.php';

(require_once __DIR__ . '/../bootstrap/dependencies.php')($app);
(require_once __DIR__ . '/../bootstrap/middlewares.php')($app);

/* Routes */
(require_once __DIR__ . '/../routes/web.php')($app);

$app->run();