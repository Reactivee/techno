<?php
/** @var yii\web\View $this */
$this->title = 'My Yii Application';
$this->title = "О Нас";
//$this->params['breadcrumbs'][] = Yii::t('main', 'factory');

?>
<!--Main banner-->
<div class="main-banner about_banner wow fadeIn position-relative" id="top" data-wow-duration="1s"
     data-wow-delay="0.5s">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content  header-text wow fadeInLeft" data-wow-duration="1s"
                             data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="main_header_text">О НАС</h2>
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
<!--End main banner-->
<section class="about mt-5 view_wrapper">
    <div class="container">

        <? foreach ($about as $key => $item) {
            ?>
            <div class="content_block mt-4">
                <div class="main_title">
                    <span><?= $item->title_ru ?></span>
                </div>
                <div class="all_content mt-4">
                    <div class="row align-items-center">
                        <? if ($item->img && $key % 2 == 0) { ?>
                            <div class="col-md-7">
                                <span><?= $item->text_ru ?> </span>
                            </div>
                            <div class="col-md-5">
                                <img class="w-100" src="<?= $item->img ?>" alt="">
                            </div>

                        <? }
                        if ($item->img && $key % 2 == 1) { ?>
                            <div class="col-md-5">
                                <img class="w-100" src="<?= $item->img ?>" alt="">
                            </div>
                            <div class="col-md-7">
                                <span><?= $item->text_ru ?> </span>
                            </div>
                        <? } else { ?>
                            <div class="col-md-12 mt-4">
                                <span><?= $item->text_ru ?></span>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </div>
        <? } ?>

    </div>


    <section>
        <div class="sertificate mt-5">
            <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="loop owl-carousel">

                            <? foreach ($catalog as $item) { ?>
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

        </div>
    </section>
</section>
