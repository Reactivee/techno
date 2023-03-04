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

        <div class="row mt-5">
            <? foreach ($worth as $item) { ?>
                <div class="col-md-12">
                    <div class="content_block ">
                        <div class="main_title">
                            <span><?= $item->title_ru ?></span>
                        </div>
                        <div class="all_content mt-4">
                            <span><?= $item->text_ru ?></span>
                        </div>
                        <!--                        <div class="all_content mt-4">-->
                        <!--                            <h5>Приоритетом предприятия является:</h5>-->
                        <!--                            <ul>-->
                        <!--                                <li>☑️ соблюдение всех качеств в сфере корпоративного управления;</li>-->
                        <!--                                <li>☑️ соблюдение всех качеств в сфере корпоративного управления;</li>-->
                        <!--                                <li>☑️ соблюдение всех качеств в сфере корпоративного управления;</li>-->
                        <!--                            </ul>-->
                        <!--                        </div>-->
                    </div>
                </div>

            <? } ?>
            <!--            <div class="col-md-7">-->
            <!--                <div class="content_block ">-->
            <!--                    <div class="main_title">-->
            <!--                        <span>Ценности предприятия</span>-->
            <!--                    </div>-->
            <!--                    <div class="all_content mt-4">-->
            <!--                        <span>Основополагающий ключевой принцип СП ООО «Techno Cable Group» - это соблюдать условия партнерских отношений, действовать строго в рамках законодательства, ответственное ведение бизнеса.</span>-->
            <!--                    </div>-->
            <!--                    <div class="all_content mt-4">-->
            <!--                        <h5>Приоритетом предприятия является:</h5>-->
            <!--                        <ul>-->
            <!--                            <li>☑️ соблюдение всех качеств в сфере корпоративного управления;</li>-->
            <!--                            <li>☑️ соблюдение всех качеств в сфере корпоративного управления;</li>-->
            <!--                            <li>☑️ соблюдение всех качеств в сфере корпоративного управления;</li>-->
            <!--                        </ul>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->

            <!--            <div class="col-md-5">-->
            <!--                <img class="w-100" src="/uploads/banners/banner.png" alt="">-->
            <!--            </div>-->
            <!---->
            <!--            <div class="col-md-12 mt-4">-->
            <!--                <div class="content_block ">-->
            <!--                <span>     С 2018 года в предприятии действует корпоративная Политика которая гарантирует каждому работнику-->
            <!--                    безопасные условия труда, предотвращение любых форм дискриминации, соблюдение норм и правил деловой-->
            <!--                    этики.-->
            <!--</span>-->
            <!--                    <div class="all_content mt-4">-->
            <!--                        <h5>Приоритетом предприятия является:</h5>-->
            <!--                        <ul>-->
            <!--                            <li>☑️ соблюдение всех качеств в сфере корпоративного управления;</li>-->
            <!--                            <li>☑️ соблюдение всех качеств в сфере корпоративного управления;</li>-->
            <!--                            <li>☑️ соблюдение всех качеств в сфере корпоративного управления;</li>-->
            <!--                        </ul>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
        </div>
        <div class="our_team mt-5">
            <div class="main_title">
                <span>Наша команда</span>
            </div>

            <div class="all_content mt-4">
                <span>Мы – команда опытных и компетентных специалистов, профессионалов своего дела! Наша команда найдет эффективное решение для реализации любой поставленной задачи и обеспечит ее исполнение на достойном уровне. Сплоченность, постоянное развитие, клиент ориентированность – это наши катализаторы, которые помогают преодолевать нам все трудности и препятствия на пути к успеху</span>
            </div>
            <div class="our_team_cards mt-5 text-center ">
                <div class="row">
                    <? foreach ($team as $item) { ?>

                        <div class="col-md-3">
                            <div class="team_item overflow-hidden">
                                <article class="profile position-relative">
                                    <div class="profile-image">
                                        <img class="w-100" src=<?= $item->empty ?>>
                                    </div>

                                    <div class="inner_content">
                                        <h2 class="profile-username"><?= $item->name ?></h2>
                                        <small class="profile-user-handle mt-3"><?= $item->text_ru ?></small>
                                        <div class="profile-links">
                                            <a href="#" class="link link--icon">
                                                <i class="ph-twitter-logo"></i>
                                            </a>
                                            <a href="#" class="link link--icon">
                                                <i class="ph-facebook-logo"></i>
                                            </a>
                                            <a href="#" class="link link--icon">
                                                <i class="ph-instagram-logo"></i>
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




