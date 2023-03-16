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
                    </div>
                </div>

            <? } ?>

            <div class="col-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card_item_advantage d-flex flex-column text-center p-5">
                            <i class="fa-solid fa-flag-checkered f-40_icon "></i>
                            <span class="gr_color font-weight-bold mt-3">соблюдение всех качеств в сфере корпоративного управления</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card_item_advantage d-flex flex-column text-center p-5">
                            <i class="fa-solid fa-flag-checkered f-40_icon "></i>
                            <span class="gr_color font-weight-bold mt-3">соблюдение всех качеств в сфере корпоративного управления</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card_item_advantage d-flex flex-column text-center p-5">
                            <i class="fa-solid fa-flag-checkered f-40_icon "></i>
                            <span class="gr_color font-weight-bold mt-3">соблюдение всех качеств в сфере корпоративного управления</span>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="all_content mt-4">
                        <span>С 2018 года в предприятии действует корпоративная Политика, которая  гарантирует каждому работнику безопасные условия труда, предотвращение любых форм дискриминации, соблюдение норм и правил деловой этикиС 2018 года в предприятии действует корпоративная Политика, которая  гарантирует каждому работнику безопасные условия труда, предотвращение любых форм дискриминации, соблюдение норм и правил деловой этики</span>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="all_content mt-4">
                    <span class="font-weight-bold">В основе ценностей СП ООО «Techno Cable Group» заложены следующие принципы, подходы и стандарты:</span>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card_item_advantage d-flex flex-column text-center p-5">
                            <i class="fa-sharp fa-solid fa-check f-40_icon"></i>
                            <span class=" font-weight-bold mt-3">	Всей своей деятельностью укреплять репутацию надежности Предприятия</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card_item_advantage d-flex flex-column text-center p-3">
                            <i class="fa-sharp fa-solid fa-check f-40_icon"></i>
                            <span class=" font-weight-bold mt-3">	Всей своей деятельностью укреплять репутацию надежности Предприятия</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card_item_advantage d-flex flex-column text-center p-5">
                            <i class="fa-sharp fa-solid fa-check f-40_icon"></i>
                            <span class=" font-weight-bold mt-3">	Всей своей деятельностью укреплять репутацию надежности Предприятия</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card_item_advantage d-flex flex-column text-center p-5">
                            <i class="fa-sharp fa-solid fa-check f-40_icon"></i>
                            <span class=" font-weight-bold mt-3">	Всей своей деятельностью укреплять репутацию надежности Предприятия</span>
                        </div>
                    </div>
                </div>

            </div>


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




