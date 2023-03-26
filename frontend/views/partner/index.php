<?php
/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = "Partner";
//$this->params['breadcrumbs'][] = Yii::t('main', 'process_factory');

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
    <div class="">

        <div class="container">
            <? foreach ($info as $item) { ?>
                <div class="main_title  my-4">
                    <span><?= $item->name_ru ?></span>
                </div>
                <div class="uni_text">
                    <?= $item->text_ru ?>
                </div>

            <? } ?>

            <!--            <div class="row">-->
            <!--                <div class="col-md-8">-->
            <!--                    <div class="block_content mb-4">-->
            <!--                        <div class="partner_title uni_title color_techno font-weight-bold">-->
            <!--                            Уважаемые партнеры!-->
            <!--                        </div>-->
            <!--                        <div class="uni_text">-->
            <!--                            Наша продукция успешно конкурирует по ценам с аналогичными изделиями других производителей-->
            <!--                            страны и ближнего зарубежья. СП ООО «Techno Cable Group» - является надежным поставщиком для-->
            <!--                            крупных предприятий энергетики,-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="block_content mb-4">-->
            <!--                        <div class="partner_title uni_title color_techno font-weight-bold">-->
            <!--                            Мы предлагаем:-->
            <!--                        </div>-->
            <!--                        <div class="uni_text">-->
            <!--                            индивидуальный подход к клиентам;-->
            <!--                            прогрессивную систему скидок;-->
            <!--                            гарантию качества продукции по ГОСТ.-->
            <!---->
            <!--                            Ждем Ваших заявок!-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="block_content mb-4">-->
            <!--                        <div class="partner_title uni_title color_techno font-weight-bold">-->
            <!--                            Ждем Ваших заявок!-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!---->
            <!--                </div>-->
            <!--                <div class="col-md-4"></div>-->
            <!--            </div>-->

            <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="loop owl-carousel">
                            <? foreach ($catalog as $item) { ?>
                                <div class="item">
                                    <div class="portfolio-item align-items-center">
                                        <div class="thumb align-items-center">
                                            <img class="w-100" src=<?= $item->path ?>>
                                        </div>
                                    </div>
                                </div>
                            <? } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_title  my-4">
                <span>Сертификаты</span>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="loop owl-carousel">
                        <? foreach ($certificate as $item) { ?>
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


