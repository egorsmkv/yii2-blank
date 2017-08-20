<?php

$basePath = dirname(__DIR__);

Yii::setAlias('@webroot', $basePath . '/web');
Yii::setAlias('@views', $basePath . '/views');

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'app-console',
    'basePath' => $basePath,
    'bootstrap' => ['log'],
    'controllerNamespace' => 'app\commands',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache'
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning']
                ],
            ],
        ],
        'db' => $db
    ],
    'params' => $params,
    'controllerMap' => []
];

return $config;