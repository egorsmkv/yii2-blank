<?php

// Connection settings to database

if (false === YII_DEBUG) { // PRODUCTION
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=',
        'username' => '',
        'password' => '',
        'charset' => 'utf8',
    ];
} else { // DEBUG
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=placehold',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
    ];
}
