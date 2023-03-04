<?php
/** @var yii\web\View $this */
$this->title = 'My Yii Application';
$this->title = "О Нас";
//$this->params['breadcrumbs'][] = Yii::t('main', 'factory');

?>
<!--Main banner-->
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
<!--End main banner-->
<section class="about">
    <div class="container">
        <!--        --><? // dd($about); ?>
        <? foreach ($about as $item) {
         ?>
            <div class="content_block">
                <div class="main_title">
                    <span><?= $item->title_ru ?></span>
                </div>
                <div class="all_content mt-4">
                    <div class="row align-items-center">
                        <? if ($item->img) { ?>
                            <div class="col-md-7">
                                <span><?= $item->text_ru ?> </span>
                            </div>
                            <div class="col-md-5">
                                <img class="w-100" src=<?= $item->img ?> alt="">
                            </div>
                        <? } else { ?>
                            <span><?= $item->text_ru ?></span>

                        <? } ?>
                    </div>
                </div>
            </div>
        <? } ?>

    </div>

</section>
