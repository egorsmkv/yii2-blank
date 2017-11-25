<?php

use yii\db\Connection;

// DEBUG
if (YII_DEBUG) {
    return [
        'class' => Connection::class,
        'dsn' => 'mysql:host=localhost;dbname=placehold',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
    ];
}

// PRODUCTION
return [
    'class' => Connection::class,
    'dsn' => 'mysql:host=localhost;dbname=',
    'username' => '',
    'password' => '',
    'charset' => 'utf8',

    // Caching
    'enableSchemaCache' => true,
    'schemaCacheDuration' => 3600,
    'schemaCache' => 'cache',
];
