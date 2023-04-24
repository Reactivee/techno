<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */

/** @var \frontend\models\ContactForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Labaratory';

?>
<div class="wow fadeIn position-relative" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <img class="top_banner w-100" src="/uploads/banners/about.png" alt="">
    <div class="content_top_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-9 align-self-center">
                            <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 class="main_header_text"><?= $laboratory['title_' . Yii::$app->language] ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ribbon_main">
        <img src="/uploads/banners/ribbon.png" alt="">
    </div>
</div>


<section class="about pb-5">
    <div class="">

        <div class="container">
            <div class="main_title  my-4">
                <span>  <?= $laboratory['title_' . Yii::$app->language] ?></span>
            </div>
            <div class="labar_content">
                <span>
                        <?= $laboratory['text_' . Yii::$app->language] ?>
                </span>
            </div>
            <div class="row mt-4">
                <? foreach ($images as $image) { ?>
                    <div class="col-md-6 mt-3 mt-md-0">
                        <img class="w-100 border_radius" src="<?= $image->img ?>" alt="">
                    </div>
                <? } ?>
            </div>
        </div>
    </div>
</section>