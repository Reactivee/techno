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
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav row align-items-center">
                    <!-- ***** Logo Start ***** -->
                    <div class="col-3">
                        <a href="/" class="logo">
                            <img class="w-100" src="/uploads/logo/Group_22.png" alt="asd">
                        </a>
                    </div>
                    <div class="col-9">
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav align-items-center">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#features">Features</a></li>
                            <li class="scroll-to-section"><a href="#about">About Us</a></li>
                            <li class="scroll-to-section"><a href="#services">Services</a></li>
                            <li class="scroll-to-section"><a href="#portfolio">Portfolio</a></li>
                            <li class="scroll-to-section"><a href="#contact">Contact Us</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </div>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->