<?php

use common\models\Settings;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Html;


$settings = Settings::find()->one();

?>

<!--<header>-->
<!--    --><?php
//    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
//        ],
//    ]);
//    $menuItems = [
//        ['label' => 'Home', 'url' => ['/site/index']],
//        ['label' => 'About', 'url' => ['/site/about']],
//        ['label' => 'Contact', 'url' => ['/site/contact']],
//    ];
//    if (Yii::$app->user->isGuest) {
//        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
//        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
//    } else {
//        $menuItems[] = '<li>'
//            . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
//            . Html::submitButton(
//                'Logout (' . Yii::$app->user->identity->username . ')',
//                ['class' => 'btn btn-link logout']
//            )
//            . Html::endForm()
//            . '</li>';
//    }
//
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav ml-auto'],
//        'items' => $menuItems,
//    ]);
//    NavBar::end();
//    ?>
<!--</header>-->
<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container position-relative">
        <div class="d-flex justify-content-end">
            <div class="lang">
                <div class="dropdown text-right d-flex flex-row">
                    <?= \lajax\languagepicker\widgets\LanguagePicker::widget([
                        'skin' => \lajax\languagepicker\widgets\LanguagePicker::SKIN_BUTTON,
                        'size' => \lajax\languagepicker\widgets\LanguagePicker::SIZE_SMALL
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-12">
                <nav class="main-nav row align-items-center position-relative">
                    <!-- ***** Logo Start ***** -->
                    <div class="col-md-3 col-6">
                        <a href="/" class="logo">
                            <img class="w-100" src="/uploads/logo/Group_22.png" alt="asd">
                        </a>
                    </div>
                    <div class="col-md-9 col-6">
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav align-items-center">
                            <li class="scroll-to-section position-relative">
                                <a href="#" class="">О Нас </a>
                                <div class="nav_sub   flex-column">
                                    <a href='/about/story'>История и планы развития</a>
                                    <a href="/about">О Компании</a>
                                    <a href="/about/worth">Ценности предприятия </a>
                                    <a href="/about/mission">Миссия </a>
                                    <a href="/about/factory">ПРОИЗВОДСТВО</a>
                                </div>
                            </li>
                            <li class="scroll-to-section position-relative"><a href="#">ПРОДУКЦИЯ</a>
                                <div class="nav_sub   flex-column">
                                    <a href='/category/service'>Наши услуги</a>
                                    <a href='/category/all-category'>ПРОДУКЦИЯ</a>
                                </div>
                            </li>
                            <li class="scroll-to-section position-relative"><a href="#">Партнеры</a>
                                <div class="nav_sub   flex-column">
                                    <a href='/partner'>Поставщики</a>
                                    <a href="/partner/client">Клиенты</a>
                                </div>
                            </li>

                            <li class="scroll-to-section"><a href="/partner/info">Информация для партнеров</a></li>
                            <li class="scroll-to-section"><a href="/site/labaratory">ИСПЫТАТЕЛЬНАЯ ЛАБОРАТОРИЯ</a></li>

                            <li class="scroll-to-section position-relative"><a href="#">Медиа</a>
                                <div class="nav_sub   flex-column">
                                    <a href='/media'>Фотогалерея</a>
                                    <a href="/media/news">Новости</a>
                                </div>
                            </li>
                            <li class="scroll-to-section"><a href="/contact">Контакты</a></li>
                            <li class="scroll-to-section"><a href="/vacancy">Вакансии</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </div>
                </nav>

            </div>

            <!-- ***** Menu End ***** -->
        </div>

    </div>
</header>
<!-- ***** Header Area End ***** -->