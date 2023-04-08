<?php
/** @var yii\web\View $this */
/** @var \common\models\GallerySearch $dataProvider */
$this->title = "News";


?>
<div class="wow fadeIn position-relative" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <img class="top_banner w-100" src="/uploads/banners/media.png" alt="">
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
                                        <h2 class="main_header_text color_techno"> <?= $news['title_' . Yii::$app->language] ?></h2>
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
    </div>
    <div class="ribbon_main">
        <img src="/uploads/banners/ribbon.png" alt="">
    </div>
</div>

<section>


    <div class="container">
        <!--        <div class="main_title  my-4">-->
        <!--            <span>новости</span>-->
        <!--        </div>-->
        <div class="row align-items-center pb-5">

            <div class="news_text_title my-4 text-center">
                <h2 class="font-weight-bold">  <?= $news['title_' . Yii::$app->language] ?></h2>
            </div>

            <div class="col-md-5">
                <div class="news_block ">
                    <img class="w-100 border_radius" src="<?= $news->img ?>" alt="">
                </div>
            </div>
            <div class="col-md-7 text-center mt-5">
                <div class="news_text ">

                    <div class="news_text_btn mt-4">
                        <?= $news['text_' . Yii::$app->language] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>