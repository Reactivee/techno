<?php

/** @var \yii\web\View $this */

/** @var string $content */

use common\models\Settings;
use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;

$settings = Settings::find()->one();

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="title" content="<?= $settings->site_name ?>">
        <meta name="Description"
              content="ZELAL TEXTILE PRODUCTS OF WORLD QUALITY">
        <?php $this->registerCsrfMetaTags() ?>
        <title>Techno Cable Group</title>
        <?php $this->head() ?>
        <link rel="shortcut icon" href="<?= $settings->logo ?>" type="image/x-icon">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= $settings->logo ?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?= $settings->logo ?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?= $settings->logo ?>">
        <link rel="mask-icon" href="<?= $settings->logo ?>">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <meta property="og:site_name" content="ZELAL TEXTILE">
        <meta property="og:title" content="ZELAL TEXTILE PRODUCTS OF WORLD QUALITY">
        <meta property="og:locale" content="en">
        <meta name="keywords"
              content=" fashion,world, industry, textile industry,fashion designing,fashion designer,dresses,style">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
              integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
              crossorigin="anonymous" referrerpolicy="no-referrer">

    </head>
    <style>

            .container, .container-sm, .container-md, .container-lg, .container-xl {
                max-width: 1320px !important;
            }
    </style>
    <body class="">
    <?php $this->beginBody() ?>

    <?= $this->render('header') ?>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->
    <div role="main" class="flex-shrink-0">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => $this->params['breadcrumbs'],
            ]);
            ?>
        </div>
        <div class="">

            <?= Alert::widget() ?>
            <?= $content ?>
        </div>


    </div>

    <?= $this->render('footer') ?>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage();
