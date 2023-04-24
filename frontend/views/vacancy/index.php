<?php
/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = "Vacancy";
//$this->params['breadcrumbs'][] = Yii::t('main', 'process_factory');

?>
<div class="wow fadeIn position-relative" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <img class="top_banner w-100" src="/uploads/banners/contacts.png" alt="">
    <div class="content_top_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s"
                                 data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 class="main_header_text text-uppercase">вакансии</h2>
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

<section class="about pb-5">
    <div class="">

        <div class="container">
            <div class="main_title  my-4 d-flex align-items-center flex-column flex-md-row">
                <span>вакансии</span>

                <div class="main-green-button ml-4">
                    <a href="#" data-toggle="modal" data-target="#exampleModal">оставить заявку</a>
                </div>
            </div>
            <div class="row block_vacancy text-center">
                <div class="col-md-4 mb-3">
                    <div class="title_prof">
                        <h4> Наименование должности</h4>
                    </div>
                    <div class=" block_vacancy text-center">
                        <? foreach ($vacancy as $item) { ?>

                                <div class="text_prof">
                                    <?= $item->title_ru ?>
                                </div>
                            <hr>
                        <? } ?>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="title_requested">
                        <h4>Требования к кандидату</h4>
                    </div>
                    <div class=" block_vacancy text-center">
                        <? foreach ($vacancy as $item) { ?>

                                <div class="text_prof">
                                    <?= $item->text_ru ?>
                                </div>
                            <hr>
                        <? } ?>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="title_salary">
                        <h4> Должностной оклад</h4>
                    </div>
                    <div class=" block_vacancy text-center">
                        <? foreach ($vacancy as $item) { ?>

                                <div class="text_prof ">
                                    <?= $item->salary ?>
                                </div>

                            <hr>
                        <? } ?>
                    </div>
                </div>
            </div>
            <!--            <div class="row block_vacancy text-center">-->
            <!--                --><? // foreach ($vacancy as $item) { ?>
            <!--                    <div class="col-md-4 mb-3">-->
            <!--                        <div class="text_prof">-->
            <!--                            --><? //= $item->title_ru ?>
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="col-md-4 mb-3">-->
            <!--                        <div class="text_prof">-->
            <!--                            --><? //= $item->text_ru ?>
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <div class="col-md-4 mb-3">-->
            <!--                        <div class="text_prof">-->
            <!--                            --><? //= $item->salary ?>
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                    <hr>-->
            <!--                --><? // } ?>
            <!--            </div>-->

        </div>
    </div>
</section>


