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
                                        <h2 class="main_header_text">ПОСТАВЩИКИ</h2>
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
            <div class="main_title  my-4">
                <span>Поставщики</span>
            </div>
            <div class="row">
                <? foreach ($suppliers as $item) { ?>
                    <div class="col-md-12">
                        <div class="block_content mb-4">
                            <div class="uni_text">
                                <?= $item['text_' . Yii::$app->language] ?>
                            </div>
                        </div>
                    </div>
                <? } ?>
            </div>

            <div class="container-fluid wow fadeIn my-5" data-wow-duration="1s" data-wow-delay="0.7s">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="loop owl-carousel">

                            <? foreach ($images as $item) { ?>
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


