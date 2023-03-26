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
$this->title = 'My Yii Application';
$this->title = "О Нас";
//$this->params['breadcrumbs'][] = Yii::t('main', 'factory');

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

<section class="about">
    <div class="container">
        <div class="main_title text-center my-4">
            <span>История и планы развития </span>
        </div>
        <div class="history_content">
           <span>СП ООО «Techno Cable Group» —основан 2013 году в Зангиатинском районе Ташкентской области, Республики Узбекистан. Это завод по производству кабельной и проводниковой продукции с различными видами изоляции.
Заводская программа развития направлена на постоянное улучшение качества продукции, модернизацию оборудования, внедрению измерительно-испытательной техники, новых прогрессивных технологий. В рамках этой программы:
</span>
        </div>
        <div class="step_year">
            <div class="row">
                <? foreach ($process as $proces) {
                    ?>

                    <div class="step_year_block d-flex align-items-center  text-left">
                        <div class="step_item_year font-weight-bold mr-4 position-relative color_techno col-md-2">
                            <span><?= $proces->title_ru ?></span>
                        </div>
                        <div class="step_item col-md-10 text-center">
                            <span><?= $proces->text_ru ?> </span>
                        </div>
                    </div>
                <? } ?>


            </div>
        </div>

    </div>

    <div>
        <div class="main_title text-center my-4">
            <span>Стратегии и принципы СП ООО «Techno Cable Group»</span>
        </div>

        <div class="container my-5">

            <div class="row">
                <? foreach ($ad_icons as $key => $advantage) { ?>
                    <div class="col-lg-3">
                        <div class="service-item wow bounceInUp" data-wow-duration="1s"
                             data-wow-delay="<?= $key / 10 ?>s">
                            <div class="row align-content-center">
                                <div class="col-12 text-center">
                                    <div class="icon mb-4">
                                        <? if (!$advantage->img) { ?>
                                            <span><?= $key + 1 ?></span>
                                        <? } else { ?>
                                            <img src="<?= $advantage->img ?>" alt="">
                                        <? } ?>

                                    </div>
                                    <div class="right-content">
                                        <h4><?= $advantage->title_ru ?> </h4>
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




