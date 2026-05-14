<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Core\App;

$configData = require __DIR__ . '/config.php';

$app = new App($configData);

require_once __DIR__ . '/helpers.php';

$app->run();
