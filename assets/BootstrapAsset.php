<?php

namespace app\assets;

use yii\web\AssetBundle;

class BootstrapAsset extends AssetBundle
{
    public $css = [
        '/vendor/bootstrap/css/bootstrap.min.css',
    ];
    public $js = [
        '/vendor/bootstrap/js/bootstrap.min.js'
    ];
    public $depends = [
        JQueryAsset::class,
        PopperAsset::class,
    ];
}
