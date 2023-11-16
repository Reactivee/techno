<?php
/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'My Yii Application';
/** @var \common\models\Process $process */
$this->title = "О Фабрике";
//$this->params['breadcrumbs'][] = Yii::t('main', 'process_factory');

?>
<?php
/** @var yii\web\View $this */
//$this->params['breadcrumbs'][] = Yii::t('main', 'factory');

?>
<div class="wow fadeIn position-relative" id="top" data-wow-duration="1s"
     data-wow-delay="0.5s">
    <img class="top_banner w-100" src="/uploads/banners/partners.png" alt="">
    <div class="content_top_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 align-self-center">
                    <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s"
                         data-wow-delay="1s">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="main_header_text"><?= Yii::t('main', 'value') ?></h2>
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
<section class="about ">
    <div class="container">

        <div class="row mt-2">

            <div class="col-md-12">
                <div class="content_block ">
                    <div class="main_title">
                        <span><?= $worth['title_' . Yii::$app->language] ?></span>
                    </div>
                    <div class="all_content mt-4">
                        <span><?= $worth['text_' . Yii::$app->language] ?></span>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row mt-5">
                    <? foreach ($worth_sub as $item) { ?>

                        <div class="col-md-4">
                            <div class="card_item_advantage d-flex flex-column text-center">
                                <i class="fa-solid fa-flag-checkered f-40_icon "></i>
                                <span class="gr_color font-weight-bold mt-3"><?= $item['text_' . Yii::$app->language] ?></span>
                            </div>
                        </div>

                    <? } ?>

                </div>
<!--                <div class="col-12">-->
<!--                    <div class="all_content mt-4">-->
<!--                        <span>С 2018 года в предприятии действует корпоративная Политика, которая  гарантирует каждому работнику безопасные условия труда, предотвращение любых форм дискриминации, соблюдение норм и правил деловой этикиС 2018 года в предприятии действует корпоративная Политика, которая  гарантирует каждому работнику безопасные условия труда, предотвращение любых форм дискриминации, соблюдение норм и правил деловой этики</span>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
            <div class="col-12">
                <div class="all_content mt-4">
                    <span class="font-weight-bold"><?= Yii::t('main', 'value_text') ?></span>
                </div>
                <div class="row mt-5">
                    <? foreach ($principe as $item) { ?>

                        <div class="col-md-3">
                            <div class="card_item_advantage d-flex flex-column text-center">
                                <i class="fa-sharp fa-solid fa-check f-40_icon"></i>
                                <span class=" font-weight-bold mt-3"><?= $item['text_' . Yii::$app->language] ?></span>
                            </div>
                        </div>
                    <? } ?>

                </div>
            </div>
        </div>

        <div class="our_team mt-5">
            <div class="main_title mt-5">
                <span><?= Yii::t('main', 'our_team') ?></span>
            </div>

            <div class="all_content mt-4">
                <span><?= Yii::t('main', 'our_team_text') ?></span>
            </div>
            <div class="our_team_cards py-5 text-center ">
                <div class="row">
                    <? foreach ($team as $item) { ?>

                        <div class="col-md-3">
                            <div class="team_item overflow-hidden">
                                <article class="profile position-relative">
                                    <div class="profile-image">
                                        <img class="w-100" src="<?= $item->empty ?>" alt="">
                                    </div>

                                    <div class="inner_content">
                                        <h2 class="profile-username font-weight-bold"><?= $item->name ?></h2>
                                        <small class="profile-user-handle mt-3"><?= $item['text_' . Yii::$app->language] ?></small>
                                        <div class="profile-links">
                                            <a href="<?= $item->tg ?>" class="link link--icon">
                                                <i class="fab fa-telegram"></i>
                                            </a>
                                            <a href="<?= $item->instagram ?>" class="link link--icon">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                            <a href="<?= $item->facebook ?>" class="link link--icon">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    <? } ?>
                </div>
            </div>
        </div>
    </div> <!--end container -->


</section>




