<?php

use yii\web\View;
use yii\web\JqueryAsset;
use yii\helpers\Html;
use yii\caching\FileCache;
use yii\log\FileTarget;
use yii\twig\ViewRenderer;
use yii\debug\Module as DebugModule;
use yii\gii\Module as GiiModule;
use yii\bootstrap\BootstrapAsset;
use yii\bootstrap\BootstrapPluginAsset;

$basePath = dirname(__DIR__);

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';
$routes = require __DIR__ . '/routes.php';

$config = [
    'language' => 'en-US',
    'id' => 'app-web',
    'basePath' => $basePath,
    'bootstrap' => ['log'],
    'components' => [
        'assetManager' => [
            'bundles' => [
                JqueryAsset::class => false,
                BootstrapPluginAsset::class => false,
                BootstrapAsset::class => false
            ],
        ],
        'view' => [
            'class' => View::class,
            'renderers' => [
                'twig' => [
                    'class' => ViewRenderer::class,
                    'cachePath' => '@runtime/Twig/cache',
                    'options' => [
                        'auto_reload' => true,
                    ],
                    'globals' => [
                        'html' => Html::class,
                    ],
                    'uses' => ['yii\bootstrap'],
                ],
            ],
        ],
        'request' => [
            'cookieValidationKey' => $params['cookieValidationKey']
        ],
        'cache' => [
            'class' => FileCache::class
        ],
        'errorHandler' => [
            'errorAction' => 'site/error'
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => FileTarget::class,
                    'levels' => ['error', 'warning']
                ]
            ]
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => true,
            'rules' => $routes
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => DebugModule::class,
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => GiiModule::class,
    ];
}

return $config;
