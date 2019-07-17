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
        'https://use.fontawesome.com/releases/v5.6.3/css/all.css',
        'library/tooltipster-master/dist/css/tooltipster.bundle.min.css',
        'library/tooltipster-master/dist/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-light.min.css',
        'library/tooltipster-master/dist/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-customer.css',
        'library/wow/animate.min.css',
        'library/copiece/croppie.css',
        'css/styleChung.css',
    ];
    public $js = [
        'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js',
        'https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.js',
        'library/tooltipster-master/dist/js/tooltipster.bundle.min.js',
        'library/wow/wow.min.js',
        'library/copiece/croppie.js',
        'js/javaChung.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        //'yii\bootstrap4\BootstrapPluginAsset',
        //'diiimonn\assets\SlimScrollAsset',
        //'yii\web\YiiAsset',
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
