<?php
/** @var yii\web\View $this */
/** @var \common\models\GallerySearch $dataProvider */
$this->title = "News";


?>
<div class="main-banner wow fadeIn position-relative" id="top" data-wow-duration="1s" data-wow-delay="0.5s">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>SEO &amp; Digital Marketing Agency</h2>
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

<section>


    <div class="container">
<!--        <div class="main_title  my-4">-->
<!--            <span>новости</span>-->
<!--        </div>-->
        <div class="row align-items-center pb-5">

            <div class="news_text_title my-4 text-center">
                <h2 class="font-weight-bold">  <?= $news->title_ru?></h2>
            </div>

            <div class="col-md-5">
                <div class="news_block ">
                    <img class="w-100 border_radius" src="<?= $news->img?>" alt="">
                </div>
            </div>
            <div class="col-md-7 text-center mt-5" >
                <div class="news_text ">

                    <div class="news_text_btn mt-4">
                        <?= $news->text_ru?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>