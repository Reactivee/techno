<?php
/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = "Partner";
//$this->params['breadcrumbs'][] = Yii::t('main', 'process_factory');

?>
<div class="wow fadeIn position-relative" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <img class="top_banner w-100" src="/uploads/banners/partners.png" alt="">
    <div class="content_top_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-9 align-self-center">
                            <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s"
                                 data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 class="main_header_text">ИНФОРМАЦИЯ ДЛЯ ПАРТНЕРОВ</h2>
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

<section class="about">
    <div class="">

        <div class="container">
            <? foreach ($info as $item) { ?>
                <div class="main_title  my-4">
                    <span><?= $item['name_' . Yii::$app->language] ?></span>
                </div>
                <div class="uni_text">
                    <?= $item['text_' . Yii::$app->language] ?>
                </div>

            <? } ?>

            <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="loop owl-carousel">
                            <? foreach ($catalog as $item) { ?>
                                <div class="item">
                                    <div class="portfolio-item align-items-center">
                                        <div class="thumb align-items-center">
                                            <img class="w-100" src=<?= $item->path ?>>
                                        </div>
                                    </div>
                                </div>
                            <? } ?>
                        </div>
                    </div>
                </div>


            </div>
            <div class="main_title  my-4">
                <span>Сертификаты</span>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="loop owl-carousel">
                        <? foreach ($certificate as $item) { ?>
                            <div class="item">
                                <div class="portfolio-item align-items-center">
                                    <div class="thumb align-items-center">
                                        <img class="w-100" src=<?= $item->img ?>>
                                    </div>
                                </div>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </div>
            <div class="map mt-5 mb-4">
                <iframe style="width: 100%; height: 400px"
                        src="https://maps.google.com/maps?t=m&output=embed&iwloc=near&z=12&q=Techno+Cabel+Group@41.26652482973896,69.13118162610023"
                        frameborder="0"></iframe>
            </div>
        </div>

    </div>
</section>


