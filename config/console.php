<?php

use yii\log\FileTarget;
use yii\caching\FileCache;

$basePath = dirname(__DIR__);

Yii::setAlias('@webroot', $basePath . '/web');
Yii::setAlias('@views', $basePath . '/views');

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'app-console',
    'basePath' => $basePath,
    'bootstrap' => ['log', 'gii'],
    'controllerNamespace' => 'app\commands',
    'components' => [
        'cache' => [
            'class' => FileCache::class
        ],
        'log' => [
            'targets' => [
                [
                    'class' => FileTarget::class,
                    'levels' => ['error', 'warning']
                ],
            ],
        ],
        'db' => $db
    ],
    'params' => $params,
    'controllerMap' => [],
    'modules' => [
        'gii' => [
            'class' => yii\gii\Module::className(),
        ]
    ]
];

return $config;
