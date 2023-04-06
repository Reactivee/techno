<?php
/** @var yii\web\View $this */
/** @var \common\models\GallerySearch $dataProvider */
$this->title = "News";


?>
<div class="main-banner media_banner wow fadeIn position-relative" id="top" data-wow-duration="1s" data-wow-delay="0.5s">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-9 align-self-center">
                        <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="main_header_text">новости</h2>
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

<section>


    <div class="container">
        <div class="main_title  my-4">
            <span>новости</span>
        </div>
        <div class="row align-items-center pb-5">
            <? foreach ($dataProvider->models as $item) { ?>
                <div class="col-md-6 mb-4 mt-4 mt-md-0">
                    <div class="news_block ">
                        <img class="w-100 border_radius" src="<?= $item->img ?>"
                             alt="">
                    </div>

                </div>
                <div class="col-md-6 text-center mt-4 mt-md-0">
                    <div class="news_text ">
                        <div class="news_text_title">
                            <?= $item['title_'. Yii::$app->language] ?>
                        </div>
                        <div class="news_text_btn mt-4">
                            <a href="full/<?= $item->id ?>" class="btn btn-primary bg_techno">
                                Подробнее</a>
                        </div>
                    </div>
                </div>

            <? } ?>

        </div>
    </div>
</section>