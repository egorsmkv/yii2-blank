<?php

// Set a YII_DEBUG and YII_ENV constants

if (php_sapi_name() === "cli") {
    if (getenv("ENABLE_DEBUG") === "true") {
        define('YII_DEBUG', true);
        define('YII_ENV', 'dev');
    } else {
        define('YII_DEBUG', false);
        define('YII_ENV', 'prod');
    }
} else {
    $hosts = ['127.0.0.1', '::1'];

    if (false === in_array($_SERVER['REMOTE_ADDR'], $hosts)) {
        define('YII_DEBUG', false);
        define('YII_ENV', 'prod');
    } else {
        define('YII_DEBUG', true);
        define('YII_ENV', 'dev');
    }
}
