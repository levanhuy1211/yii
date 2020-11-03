<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'assets/css/vendor/vendor.min.css',
        'assets/css/plugins/plugins.min.css',
        'assets/css/style.min.css',
    ];
    public $js = [
        'assets/js/vendor/vendor.min.js',
        'assets/js/plugins/plugins.min.js',
        'assets/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
