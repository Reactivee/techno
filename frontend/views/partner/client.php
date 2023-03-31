<?php
/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = "Partner";
//$this->params['breadcrumbs'][] = Yii::t('main', 'process_factory');

?>
<div class="main-banner partner_banner wow fadeIn position-relative" id="top" data-wow-duration="1s" data-wow-delay="0.5s">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-9 align-self-center">
                        <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="main_header_text">КЛИЕНТЫ</h2>
                                </div>
                                <div class="col-lg-12">

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
            <div class="main_title  my-4">
                <span>Клиенты</span>
            </div>
            <div class="row">
                <? foreach ($clients as $client) { ?>
                    <div class="col-md-12">
                        <div class="block_content mb-4">
                            <div class="main_title  my-4">
                                <span><?= $client->title_ru ?></span>
                            </div>
                            <div class="uni_text">
                                <?= $client->text_ru ?>
                            </div>
                        </div>
                    </div>
                <? } ?>

            </div>
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

<!--            <div class="row align-items-center ">-->
<!--                <div class="col-md-3">-->
<!--                    <img class="w-100" src="/uploads/catalog/8mOWArtK8C7H28iGOsPnCE-XqgYyCWJa.jpg" alt="asd">-->
<!--                </div>-->
<!--                <div class="col-md-3">-->
<!--                    <img class="w-100" src="/uploads/catalog/8mOWArtK8C7H28iGOsPnCE-XqgYyCWJa.jpg" alt="asd">-->
<!--                </div>-->
<!--                <div class="col-md-3">-->
<!--                    <img class="w-100" src="/uploads/catalog/8mOWArtK8C7H28iGOsPnCE-XqgYyCWJa.jpg" alt="asd">-->
<!--                </div>-->
<!--                <div class="col-md-3">-->
<!--                    <img class="w-100" src="/uploads/catalog/8mOWArtK8C7H28iGOsPnCE-XqgYyCWJa.jpg" alt="asd">-->
<!--                </div>-->
<!---->
<!--            </div>-->
        </div>
    </div>
</section>


