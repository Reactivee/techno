<?php
/** @var yii\web\View $this */

?>
<?php
/** @var yii\web\View $this */
$this->title = Yii::t('main', 'history_plan');
?>
<div class=" wow fadeIn position-relative" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <img class="top_banner w-100" src="/uploads/banners/about.png" alt="">
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
                                        <h2 class="main_header_text"><?= Yii::t('main', 'history_plan') ?></h2>
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

<section class="about view_wrapper">
    <div class="container">
        <div class="main_title text-center my-4">
            <span><?= Yii::t('main', 'history_plan') ?> </span>
        </div>
        <div class="history_content">
           <span>
               <?= Yii::t('main', 'history_plan_text') ?></span>
        </div>
        <div class="step_year">
            <div class="row">
                <? foreach ($process as $proces) {
                    ?>

                    <div class="step_year_block d-flex ">
                        <div class="step_item_year font-weight-bold mr-4 position-relative color_techno col-md-2">
                            <span><?= $proces['title_' . Yii::$app->language] ?></span>
                        </div>
                        <div class="step_item col-md-10 text-center">
                            <span><?= $proces['text_' . Yii::$app->language] ?> </span>
                        </div>
                    </div>
                <? } ?>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="main_title text-center my-4">
            <span>
                <?= Yii::t('main', 'strategy') ?>
              </span>
        </div>

        <div class=" mt-5">

            <div class="row">
                <? foreach ($ad_icons as $key => $advantage) { ?>
                    <div class="col-lg-3">
                        <div class="service-item wow bounceInUp" data-wow-duration="1s"
                             data-wow-delay="<?= $key / 10 ?>s">
                            <div class="row align-content-center">
                                <div class="col-12 text-center">
                                    <div class="icon mb-4">

                                            <span><?= $key + 1 ?></span>
<!--                                        --><?// } else { ?>
<!--                                            <img src="--><?//= $advantage->img ?><!--" alt="">-->
<!--                                        --><?// } ?>

                                    </div>
                                    <div class="right-content">
                                        <h4><?= $advantage['title_' . Yii::$app->language] ?> </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <? } ?>

            </div>

        </div>
    </div>
</section>




