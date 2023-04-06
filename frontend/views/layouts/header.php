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
                    <div class="col-md-2 col-6">
                        <a href="/" class="logo">
                            <img class="w-100" src="/uploads/logo/Group_22.png" alt="asd">
                        </a>
                    </div>
                    <div class="col-md-10 col-6">
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav align-items-center">
                            <li class="scroll-to-section position-relative">
                                <a href="#" class=""><?= Yii::t('main', 'about') ?> </a>
                                <div class="nav_sub   flex-column">
                                    <a href='/about/story'><?= Yii::t('main', 'story') ?></a>
                                    <a href="/about"><?= Yii::t('main', 'company') ?></a>
                                    <a href="/about/worth"><?= Yii::t('main', 'advantage') ?> </a>
                                    <a href="/about/mission"><?= Yii::t('main', 'mission') ?> </a>
                                    <a href="/about/factory"><?= Yii::t('main', 'factory') ?></a>
                                </div>
                            </li>
                            <li class="scroll-to-section position-relative"><a
                                        href="#"><?= Yii::t('main', 'product') ?></a>
                                <div class="nav_sub   flex-column">
                                    <a href='/category/service'><?= Yii::t('main', 'service') ?></a>
                                    <a href='/category/all-category'><?= Yii::t('main', 'product') ?></a>
                                </div>
                            </li>
                            <li class="scroll-to-section position-relative"><a
                                        href="#"><?= Yii::t('main', 'partner') ?></a>
                                <div class="nav_sub   flex-column">
                                    <a href='/partner'> <?= Yii::t('main', 'supply') ?> </a>
                                    <a href="/partner/client"><?= Yii::t('main', 'clients') ?></a>
                                </div>
                            </li>

                            <li class="scroll-to-section"><a href="/partner/info"><?= Yii::t('main', 'info') ?></a></li>
                            <li class="scroll-to-section"><a
                                        href="/site/labaratory"><?= Yii::t('main', 'laboratory') ?></a></li>

                            <li class="scroll-to-section position-relative"><a
                                        href="#"><?= Yii::t('main', 'media') ?></a>
                                <div class="nav_sub   flex-column">
                                    <a href='/media'><?= Yii::t('main', 'photo') ?></a>
                                    <a href="/media/news"><?= Yii::t('main', 'news') ?></a>
                                </div>
                            </li>
                            <li class="scroll-to-section"><a href="/contact"><?= Yii::t('main', 'contact') ?></a></li>
                            <li class="scroll-to-section"><a href="/vacancy"><?= Yii::t('main', 'vacancy') ?></a></li>
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