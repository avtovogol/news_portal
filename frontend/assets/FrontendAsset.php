<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use common\assets\Html5shiv;
use yii\bootstrap\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * Frontend application asset
 */
class FrontendAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@frontend/web/bundle';

    /**
     * @var array
     */
    public $css = [
//        'style.css',
        'css/site.css',
        'css/media_query.css',
        'css/bootstrap.css',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        'https://fonts.googleapis.com/css?family=Poppins',
        'css/animate.css',
        'css/owl.carousel.css',
        'css/owl.theme.default.css',
        'css/style_1.css',
        'https://fonts.googleapis.com/css?family=Sawarabi+Gothic&display=swap',
        'fonts1/Century-Gothic.ttf'
    ];

    /**
     * @var array
     */
    public $js = [
//        'app.js',
        'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js',
        'js/owl.carousel.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js',
        'js/jquery.waypoints.min.js',
        'js/modernizr-3.5.0.min.js',
        'js/jquery.stellar.min.js',
        'js/main.js',
        'js/parralax123.js',
    ];

    /**
     * @var array
     */
    public $depends = [
        YiiAsset::class,
//        BootstrapAsset::class,
        Html5shiv::class,
    ];
}
