<?php

namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $css = [
        '/css/style.css'
    ];
    public $js = [
        '/js/main.js',
    ];
    public $depends = [
        BootstrapAsset::class,
    ];
}
