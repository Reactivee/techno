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
        'https://unpkg.com/aos@2.3.1/dist/aos.css',
        'https://unpkg.com/swiper/swiper-bundle.min.css',

        'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap',
        'fontawesome/css/all.min.css',
        'css/templatemo-seo-dream.css',
        'css/animated.css',
        'css/owl.css',
//        'css/style.css',
    ];
    public $js = [
        'https://unpkg.com/aos@2.3.1/dist/aos.js',
        "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js",
        "https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js",
        'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js',
        'https://unpkg.com/swiper/swiper-bundle.min.js',
        'js/lightbox.min.js',
        'js/owl-carousel.js',
        'js/animation.js',
        'js/imagesloaded.js',
        'js/custom.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
