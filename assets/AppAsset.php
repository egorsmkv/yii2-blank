<?php

namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/style.css'
    ];
    public $js = [
        'js/jquery-2.1.1.min.js',
        'js/bootstrap.min.js'
    ];
    public $sourcePath = '@web/fonts';
}
