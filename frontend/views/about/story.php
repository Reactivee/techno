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
                <? foreach ($process as $process) {

                } ?>

                <div class="step_year_block d-flex align-items-center  text-center">
                    <div class="step_item_year font-weight-bold mr-4 position-relative color_techno col-md-2">
                        <span>2014</span>
                    </div>
                    <div class="step_item col-md-10">
                        <span>Было освоено производство силовых и контрольных кабелей с номинальным напряжением до 1,0 кВ, установочных и соединительных проводов, с различными видами</span>
                    </div>
                </div>
                <div class="step_year_block d-flex align-items-center text-center">
                    <div class="step_item_year font-weight-bold mr-4  position-relative color_techno col-md-2">
                        <span>2014-2017</span>
                    </div>
                    <div class="step_item col-md-10 ">
                        <span>	2017 году предприятие внедрило международную систему менеджмента который был подтвержден международной организациией по стандартам «TÜV Thüringen E.V.» и выдан сертификат соответствия системы менеджмента Предприятия международному стандарту ISO 9001:2015 (дата выдачи и номер сертификата 07 июля 2017 года за номером TIC 15 100 179917 с ссылкой на переход к сертификату); </span>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div>
        <!--        <div class="main_title text-center my-4">-->
        <!--            <span>Стратегии и принципы СП ООО «Techno Cable Group»</span>-->
        <!--        </div>-->
        <!--        <span>	- Обучение персонала;-->
        <!--	-  Командная работа;-->
        <!--	- Удовлетворение запросов потребителей;-->
        <!--	- Сжатые сроки производства;-->
        <!--	- Высокое качество продукции;-->
        <!--	- Низкие цены.-->
        <!--</span>-->
        <!--        <div class="container">-->
        <!--            <div class="row">-->
        <!---->
        <!--                --><? // foreach ($ad_icons as $key => $advantage) { ?>
        <!--                    <div class="col-lg-4">-->
        <!--                        <div class="service-item wow bounceInUp" data-wow-duration="1s"-->
        <!--                             data-wow-delay="--><? //= $key / 10 ?><!--s">-->
        <!--                            <div class="row">-->
        <!--                                <div class="col-lg-4">-->
        <!--                                    <div class="icon">-->
        <!--                                        <img src=--><? //= $advantage->img ?><!-- alt="">-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                                <div class="col-lg-8">-->
        <!--                                    <div class="right-content">-->
        <!--                                        <h4>Similar Websites</h4>-->
        <!--                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium-->
        <!--                                            dormque-->
        <!--                                            laudantium.</p>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                --><? // } ?>
        <!--            </div>-->
        <!--        </div>-->
    </div>
</section>




