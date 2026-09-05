<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Core\App;
use App\Core\Env;

require_once __DIR__ . '/helpers.php';

// Load environment variables from .env if present
Env::load(__DIR__ . '/.env');

$configData = require __DIR__ . '/config.php';

$app = new App($configData);

$app->run();
